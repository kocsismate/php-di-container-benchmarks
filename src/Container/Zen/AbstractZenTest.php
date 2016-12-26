<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\Zen\Resource\CompiledContainer;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractZenTest implements TestInterface
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
