<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractLaravelTest
{
    public function run(): void
    {
        $this->container->make(Class10::class);
    }
}
