<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Fixture\Class10;

class Test5 extends AbstractAurynTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->make(Class10::class);
    }
}
