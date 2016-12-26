<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;
use DiContainerBenchmarks\Container\Symfony\Resource\CompiledContainer;

abstract class AbstractSymfonyTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function setup(): void
    {
        $this->container = new CompiledContainer();
    }
}
