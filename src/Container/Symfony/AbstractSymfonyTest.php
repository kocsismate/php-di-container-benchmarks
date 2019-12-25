<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Test\TestInterface;
use Symfony\Component\DependencyInjection\Container;

abstract class AbstractSymfonyTest implements TestInterface
{
    protected Container $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = require __DIR__.'/Resource/CompiledPrototypeContainer.php';
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = require __DIR__.'/Resource/CompiledSingletonContainer.php';
    }
}
