<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use Dice\Dice;
use DiContainerBenchmarks\Fixture\Constructor\Class1;
use DiContainerBenchmarks\Fixture\Constructor\Class10;
use DiContainerBenchmarks\Fixture\Constructor\Class100;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractDiceTest implements TestInterface
{
    /**
     * @var Dice
     */
    protected $container;

    public function startup(): void
    {
        $dice = new Dice();
        $dice->addRule(Class1::class, ["shared" => true]);
        $dice->addRule(Class10::class, ["shared" => true]);
        $dice->addRule(Class100::class, ["shared" => true]);

        $this->container = $dice;
    }
}
