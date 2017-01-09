<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Illuminate\Container\Container;

abstract class AbstractLaravelTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Container();
        $container->bind(Class1::class);
        $container->bind(Class10::class);
        $container->bind(Class100::class);

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Container();
        $container->singleton(Class1::class);
        $container->singleton(Class10::class);
        $container->singleton(Class100::class);

        $this->container = $container;
    }
}
