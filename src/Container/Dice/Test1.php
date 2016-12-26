<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Constructor\Class1;

class Test1 extends AbstractDiceTest
{
    public function run(): void
    {
        $this->container->create(Class1::class);
    }
}
