<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerInterface;
use RuntimeException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

class SymfonyContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "symfony/dependency-injection";
    }

    public function getNamespace(): string
    {
        return "Symfony";
    }

    public function getDisplayedName(): string
    {
        return "Symfony";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://symfony.com/doc/current/components/dependency_injection.html";
    }

    public function build(): void
    {
        // Build container with prototype services
        $containerBuilder = new ContainerBuilder();

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\Class$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("class$i", $definition);
        }

        $containerBuilder->compile();
        $this->dumpRegularContainer(
            $containerBuilder,
            PROJECT_ROOT . "/src/Container/Symfony/Resource/",
            "CompiledPrototypeContainer"
        );

        // Build container with singleton services
        $containerBuilder = new ContainerBuilder();

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\Class$i", []);
            $definition->setShared(true);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("class$i", $definition);
        }

        $containerBuilder->compile();
        $this->dumpRegularContainer(
            $containerBuilder,
            PROJECT_ROOT . "/src/Container/Symfony/Resource/",
            "CompiledSingletonContainer"
        );
    }

    protected function dumpRegularContainer(ContainerBuilder $containerBuilder, string $path, string $class)
    {
        $dumper = new PhpDumper($containerBuilder);
        file_put_contents(
            $path . $class . ".php",
            $dumper->dump(
                [
                    "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                    "class" => $class,
                    "as_files" => false,
                    "debug" => false,
                ]
            )
        );
    }

    protected function dumpFileContainer(ContainerBuilder $containerBuilder, string $path, string $class)
    {
        $dumper = new PhpDumper($containerBuilder);

        $content = $dumper->dump(
            [
                "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                "class" => $class,
                "file" => $path,
                "as_files" => true,
                "debug" => false,
            ]
        );

        $file = key($content);
        $dir = $path . substr($file, 0, strpos($file, "/"));
        $result = @mkdir($dir, 0777, true) && is_dir($dir);
        if ($result === false) {
            throw new RuntimeException(sprintf("Unable to create the container directory (%s)\n", $dir));
        }

        foreach ($content as $file => $code) {
            file_put_contents($path . $file, $code);
        }
    }
}
