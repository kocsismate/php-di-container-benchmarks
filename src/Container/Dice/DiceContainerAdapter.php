<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;

final class DiceContainerAdapter implements ContainerAdapterInterface
{
    public function build(): void
    {
    }

    public function bootstrapSingletonContainer()
    {
        $container = new DecoratedDice();

        return $container->addRule('*', ["shared" => true]);
    }

    public function bootstrapPrototypeContainer()
    {
        return new DecoratedDice();
    }
}
