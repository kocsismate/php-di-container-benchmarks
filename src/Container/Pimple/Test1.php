<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

use DiContainerBenchmarks\Fixture\Constructor\Class1;

class Test1 extends AbstractPimpleTest
{
    public function run(): void
    {
        $this->container[Class1::class];
    }
}
