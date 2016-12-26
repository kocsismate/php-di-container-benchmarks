<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Fixture\Constructor\Class100;

class Test3 extends AbstractSymfonyTest
{
    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
