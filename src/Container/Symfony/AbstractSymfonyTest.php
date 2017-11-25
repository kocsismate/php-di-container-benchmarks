<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\Symfony\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Symfony\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Symfony\Component\DependencyInjection\Container;

abstract class AbstractSymfonyTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new CompiledPrototypeContainer();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new CompiledSingletonContainer();
    }
}
