<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Fixture\Class100;

class Test6 extends AbstractAurynTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->make(Class100::class);
    }
}
