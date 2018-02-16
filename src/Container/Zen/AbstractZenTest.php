<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\Zen\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Zen\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractZenTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new CompiledPrototypeContainer(PROJECT_ROOT);
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new CompiledSingletonContainer(PROJECT_ROOT);
    }
}
