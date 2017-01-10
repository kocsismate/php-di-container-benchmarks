<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractDiceTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->create(Class100::class);
    }
}
