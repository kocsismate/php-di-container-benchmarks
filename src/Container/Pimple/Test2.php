<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractPimpleTest
{
    public function run(): void
    {
        $this->container[Class10::class];
    }
}
