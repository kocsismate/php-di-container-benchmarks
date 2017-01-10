<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractLaravelTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->make(Class100::class);
    }
}
