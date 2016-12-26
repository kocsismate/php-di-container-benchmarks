<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractDiceTest
{
    public function run(): void
    {
        $this->container->getRule(Class10::class);
    }
}
