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
        for ($i = 1; $i <= 100; $i++) {
            $container->addRule('DiContainerBenchmarks\Fixture\Class' . $i, ["shared" => false]);
        }

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Dice();
        for ($i = 1; $i <= 100; $i++) {
            $container->addRule('DiContainerBenchmarks\Fixture\Class' . $i, ["shared" => true]);
        }

        $this->container = $container;
    }
}
