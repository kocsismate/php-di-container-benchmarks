<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Container\ContainerInterface;

class DiceContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Dice";
    }

    public function build(): void
    {
    }
}
