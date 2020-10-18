<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use CompiledSingletonContainer;
use DI\ContainerBuilder;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Fixture\A\FixtureA10;
use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Test\UnsupportedTestException;

use function DI\autowire;
use function file_exists;
use function unlink;

final class PhpDiContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
        if (file_exists(PROJECT_ROOT . "/src/Container/PhpDi/Resource/CompiledSingletonContainer")) {
            unlink(PROJECT_ROOT . "/src/Container/PhpDi/Resource/CompiledSingletonContainer");
        }

        $builder = new ContainerBuilder();

        $definitions = [
            FixtureA10::class => autowire(),
            FixtureA100::class => autowire(),
            FixtureC1000::class => autowire(),
        ];

        for ($i = 1; $i <= 1000; $i++) {
            $definitions["DiContainerBenchmarks\\Fixture\\B\\FixtureB$i"] = autowire();
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
