<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\Symfony\Resource\CompiledContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractSymfonyTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function startup(): void
    {
        $this->container = new CompiledContainer();
    }
}
