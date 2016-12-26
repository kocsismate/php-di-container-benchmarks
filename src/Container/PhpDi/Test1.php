<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Fixture\Constructor\Class1;

class Test1 extends AbstractPhpDiTest
{
    public function run(): void
    {
        $this->container->get(Class1::class);
    }
}
