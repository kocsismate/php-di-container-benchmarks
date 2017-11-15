<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Cobalt;

use DiContainerBenchmarks\Fixture\Class10;

class Test3 extends AbstractCobaltTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->resolve(Class10::class);
    }
}
