<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Fixture\Constructor\Class50;

class Test3 extends AbstractZenTest
{
    public function run(): void
    {
        $this->container->get(Class50::class);
    }
}
