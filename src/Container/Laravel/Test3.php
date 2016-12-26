<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Constructor\Class100;

class Test3 extends AbstractLaravelTest
{
    public function run(): void
    {
        $this->container->make(Class100::class);
    }
}
