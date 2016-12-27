<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ZendServiceManager;

use DiContainerBenchmarks\Fixture\Constructor\Class100;

class Test3 extends AbstractZendServiceManagerTest
{
    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
