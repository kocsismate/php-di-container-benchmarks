<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractSymfonyTest
{
    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
