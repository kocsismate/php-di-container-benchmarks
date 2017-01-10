<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractAuraTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->newInstance(Class100::class);
    }
}
