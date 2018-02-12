<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Cobalt;

use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Jshannon63\Cobalt\Container;

abstract class AbstractCobaltTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Container();

        $container->bind(Class10::class);
        $container->bind(Class100::class);

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Container("shared");

        $container->bind(Class10::class);
        $container->bind(Class100::class);

        $this->container = $container;
    }
}
