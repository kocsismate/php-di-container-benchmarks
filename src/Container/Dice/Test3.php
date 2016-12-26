<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Constructor\Class100;

class Test3 extends AbstractDiceTest
{
    public function run(): void
    {
        $this->container->create(Class100::class);
    }
}
