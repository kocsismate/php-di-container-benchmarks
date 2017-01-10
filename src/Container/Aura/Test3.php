<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use DiContainerBenchmarks\Fixture\Class10;

class Test3 extends AbstractAuraTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->newInstance(Class10::class);
    }
}
