<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Constructor\Class1;

class Test1 extends AbstractLaravelTest
{
    public function run(): void
    {
        $this->container->make(Class1::class);
    }
}
