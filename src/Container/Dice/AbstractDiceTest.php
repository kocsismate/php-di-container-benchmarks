<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use Dice\Dice;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractDiceTest implements TestInterface
{
    protected Dice $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $this->container = new Dice();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Dice();

        $this->container = $container->addRule('*', ["shared" => true]);
    }
}
