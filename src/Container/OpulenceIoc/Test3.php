<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\OpulenceIoc;

use DiContainerBenchmarks\Fixture\Class10;

class Test3 extends AbstractOpulenceTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->resolve(Class10::class);
    }
}
