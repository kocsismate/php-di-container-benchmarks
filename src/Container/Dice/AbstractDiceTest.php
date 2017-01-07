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

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Dice();

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Dice();
       
        $container->addRule('*', ["shared" => true]);
        

        $this->container = $container;
    }
}
