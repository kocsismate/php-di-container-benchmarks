<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Test\TestInterface;
use PHPixie\DI\Container\Root as RootContainer;

abstract class AbstractPHPixieDiTest implements TestInterface
{
    /**
     * @var RootContainer
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new Container\PrototypeContainer();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new Container\SingletonContainer();
    }
}
