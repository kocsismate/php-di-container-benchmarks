<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\OpulenceIoc;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Opulence\Ioc\Container;


abstract class AbstractOpulenceTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Container();
        $container->bindPrototype(Class1::class);
        $container->bindPrototype(Class10::class);
        $container->bindPrototype(Class100::class);

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Container();
        $container->bindSingleton(Class1::class);
        $container->bindSingleton(Class10::class);
        $container->bindSingleton(Class100::class);

        $this->container = $container;
    }
}
