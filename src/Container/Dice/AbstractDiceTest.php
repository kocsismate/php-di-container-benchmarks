<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use Dice\Dice;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractDiceTest implements TestInterface
{
    /**
     * @var Dice
     */
    protected $container;

    public function startup(): void
    {
        $this->container = new Dice();
    }
}
