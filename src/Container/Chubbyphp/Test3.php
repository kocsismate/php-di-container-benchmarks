<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Fixture\Class10;

final class Test3 extends AbstractChubbyphpTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
