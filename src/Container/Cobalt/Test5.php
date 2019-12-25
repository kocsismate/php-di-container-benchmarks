<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Cobalt;

use DiContainerBenchmarks\Fixture\Class10;

final class Test5 extends AbstractCobaltTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->resolve(Class10::class);
    }
}
