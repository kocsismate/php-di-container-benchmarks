<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;

use Auryn\Injector;

abstract class AbstractAurynTest implements TestInterface
{
    /**
     * @var Injector
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Injector();
        $container->make(Class1::class);
        $container->make(Class10::class);
        $container->make(Class100::class);

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Injector();
        $container->share(Class1::class);
        $container->share(Class10::class);
        $container->share(Class100::class);

        $this->container = $container;
    }
}
