<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use Aura\Di\ContainerBuilder;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Test\UnsupportedTestException;

final class AuraContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
    }

    public function bootstrapSingletonContainer()
    {
        $containerBuilder = new ContainerBuilder();

        return $containerBuilder->newConfiguredInstance([new AuraSingletonContainerConfig()], true);
    }

    public function bootstrapPrototypeContainer()
    {
        throw new UnsupportedTestException("Aura doesn't support the prototype scope via the PSR-11 interface");
    }
}
