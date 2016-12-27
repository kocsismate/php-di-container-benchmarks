<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

use DiContainerBenchmarks\Fixture\Constructor\Class100;

class Test3 extends AbstractPimpleTest
{
    public function run(): void
    {
        $this->container[Class100::class];
    }
}
