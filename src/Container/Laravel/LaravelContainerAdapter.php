<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use Illuminate\Container\Container;

final class LaravelContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
    }

    public function bootstrapSingletonContainer()
    {
        $container = new Container();
        $container->singleton(Class1::class);
        $container->singleton(Class10::class);
        $container->singleton(Class100::class);

        return $container;
    }

    public function bootstrapPrototypeContainer()
    {
        $container = new Container();
        $container->bind(Class1::class);
        $container->bind(Class10::class);
        $container->bind(Class100::class);

        return $container;
    }
}
