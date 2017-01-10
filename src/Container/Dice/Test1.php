<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Class10;

class Test1 extends AbstractDiceTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->create(Class10::class);
    }
}
