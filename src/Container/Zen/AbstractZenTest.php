<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\Zen\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Zen\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractZenTest implements TestInterface
{
    protected ContainerInterface $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new CompiledPrototypeContainer();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new CompiledSingletonContainer();
    }
}
