<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Fixture\Constructor\Class1;

class Test1 extends AbstractZenTest
{
    public function run(): void
    {
        $this->container->get(Class1::class);
    }
}
