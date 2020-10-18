<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use CompiledSingletonContainer;
use DI\ContainerBuilder;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Test\UnsupportedTestException;

use function DI\autowire;

final class PhpDiContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
        $builder = new ContainerBuilder();

        $definitions = [];
        for ($i = 1; $i <= 100; $i++) {
            $definitions["DiContainerBenchmarks\\Fixture\\Class$i"] = autowire();
        }

        $builder->addDefinitions($definitions);
        $builder->enableCompilation(PROJECT_ROOT . "/src/Container/PhpDi/Resource", "CompiledSingletonContainer");
        $builder->build();
    }

    public function bootstrapSingletonContainer()
    {
        require_once __DIR__ . "/Resource/CompiledSingletonContainer.php";

        return new CompiledSingletonContainer();
    }

    public function bootstrapPrototypeContainer()
    {
        throw new UnsupportedTestException("PHP-DI doesn't support the prototype scope");
    }
}
