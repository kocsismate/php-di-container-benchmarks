<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use RuntimeException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

final class SymfonyContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
        $path = PROJECT_ROOT . "/src/Container/Symfony/Resource/";

        foreach (glob($path.'/Container*/') as $dir) {
            foreach (glob($dir.'/*') as $file) {
                unlink($file);
            }
            rmdir($dir);
        }

        // Build container with prototype services
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter('container.dumper.inline_class_loader', false);
        $containerBuilder->setParameter('container.dumper.inline_factories', true);

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\Class$i", []);
            $definition->setShared(false);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\Class$i", $definition);
        }
        $containerBuilder->getDefinition("DiContainerBenchmarks\\Fixture\\Class10")->setPublic(true);
        $containerBuilder->getDefinition("DiContainerBenchmarks\\Fixture\\Class100")->setPublic(true);

        $containerBuilder->compile();
        $this->dumpFileContainer(
            $containerBuilder,
            $path,
            "CompiledPrototypeContainer"
        );

        // Build container with singleton services
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->setParameter('container.dumper.inline_class_loader', false);
        $containerBuilder->setParameter('container.dumper.inline_factories', true);

        for ($i = 1; $i <= 100; $i++) {
            $definition = new Definition("DiContainerBenchmarks\\Fixture\\Class$i", []);
            $definition->setShared(true);
            $definition->setAutowired(true);
            $containerBuilder->setDefinition("DiContainerBenchmarks\\Fixture\\Class$i", $definition);
        }
        $containerBuilder->getDefinition("DiContainerBenchmarks\\Fixture\\Class10")->setPublic(true);
        $containerBuilder->getDefinition("DiContainerBenchmarks\\Fixture\\Class100")->setPublic(true);

        $containerBuilder->compile();
        $this->dumpFileContainer(
            $containerBuilder,
            $path,
            "CompiledSingletonContainer"
        );
    }
    
    public function bootstrapSingletonContainer()
    {
        return require __DIR__.'/Resource/CompiledSingletonContainer.php';
    }

    public function bootstrapPrototypeContainer()
    {
        return require __DIR__.'/Resource/CompiledPrototypeContainer.php';
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
                "file" => $path.'/'.$class.'.php',
                "as_files" => true,
                "debug" => false,
            ]
        );

        $file = key($content);
        $dir = $path . substr($file, 0, strpos($file, "/"));
        $result = @mkdir($dir, 0777, true) || is_dir($dir);
        if ($result === false) {
            throw new RuntimeException(sprintf("Unable to create the container directory (%s)\n", $dir));
        }

        foreach ($content as $file => $code) {
            file_put_contents($path . $file, $code);
        }
    }
}
