<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Container\Yaco\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractYacoTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        //TODO: be able to disable prototype
        $this->container = new CompiledSingletonContainer();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new CompiledSingletonContainer();
    }
}
