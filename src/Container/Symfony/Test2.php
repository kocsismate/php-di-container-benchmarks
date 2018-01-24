<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Fixture\Class100;

class Test2 extends AbstractSymfonyTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
