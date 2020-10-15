<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ClanCats;

use DiContainerBenchmarks\Container\ClanCats\Resource\CCCompiledPrototypeContainer;
use DiContainerBenchmarks\Container\ClanCats\Resource\CCCompiledSingletonContainer;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractClanCatsTest implements TestInterface
{
    protected  $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new CCCompiledPrototypeContainer();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new CCCompiledSingletonContainer();
    }
}
