<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Constructor\Class1;
use DiContainerBenchmarks\Fixture\Constructor\Class10;
use DiContainerBenchmarks\Fixture\Constructor\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Illuminate\Container\Container;

abstract class AbstractLaravelTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    public function startup(): void
    {
        $container = new Container();
        $container->singleton(Class1::class);
        $container->singleton(Class10::class);
        $container->singleton(Class100::class);

        $this->container = $container;
    }
}
