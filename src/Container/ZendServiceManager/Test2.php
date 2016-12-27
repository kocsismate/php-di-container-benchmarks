<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ZendServiceManager;

use DiContainerBenchmarks\Fixture\Constructor\Class10;

class Test2 extends AbstractZendServiceManagerTest
{
    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
