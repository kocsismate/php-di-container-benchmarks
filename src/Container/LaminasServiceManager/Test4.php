<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\LaminasServiceManager;

use DiContainerBenchmarks\Fixture\Class100;

final class Test4 extends AbstractLaminasServiceManagerTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
