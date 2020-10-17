<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use Dice\Dice;
use Psr\Container\ContainerInterface;

final class DecoratedDice extends Dice implements ContainerInterface
{
    public function has($id)
    {
        return true;
    }

    public function get($id)
    {
        return $this->create($id);
    }
}
