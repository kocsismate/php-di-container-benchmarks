<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractZenTest
{
    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
