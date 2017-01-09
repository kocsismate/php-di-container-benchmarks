<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\Symfony\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Symfony\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractSymfonyTest implements TestInterface
{
    /**
     * @var ContainerInterface
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

    public function supported(): bool
    {
        return true;
    }
}
