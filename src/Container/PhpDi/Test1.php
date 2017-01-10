<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Fixture\Class10;

class Test1 extends AbstractPhpDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
