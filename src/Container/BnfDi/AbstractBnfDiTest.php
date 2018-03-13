<?php
declare(strict_types=1);
namespace DiContainerBenchmarks\Container\BnfDi;

use Bnf\Di\Container;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractBnfDiTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new Container([new FactoryServiceProvider]);
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new Container([new SingletonServiceProvider]);
    }
}
