<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Fixture\Class100;

class Test6 extends AbstractDiceTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->create(Class100::class);
    }
}
