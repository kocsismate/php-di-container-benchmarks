<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Fixture\Constructor\Class1;
use DiContainerBenchmarks\Fixture\Constructor\Class10;
use DiContainerBenchmarks\Fixture\Constructor\Class100;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;

class SymfonyContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Symfony";
    }

    public function build(): void
    {
        $containerBuilder = new ContainerBuilder();

        $definition = new Definition(Class1::class, []);
        $definition->setAutowired(true);
        $containerBuilder->setDefinition(Class1::class, $definition);

        $definition = new Definition(Class10::class, []);
        $definition->setAutowired(true);
        $containerBuilder->setDefinition(Class10::class, $definition);

        $definition = new Definition(Class100::class, []);
        $definition->setAutowired(true);
        $containerBuilder->setDefinition(Class100::class, $definition);

        $containerBuilder->compile();

        $dumper = new PhpDumper($containerBuilder);
        file_put_contents(
            "/code/src/Container/Symfony/Resource/CompiledContainer.php",
            $dumper->dump(
                [
                    "namespace" => "DiContainerBenchmarks\\Container\\Symfony\\Resource",
                    "class" => "CompiledContainer"
                ]
            )
        );
    }
}
