<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Fixture\Class10;

final class Test1 extends AbstractSymfonyTest
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
