<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

class AuraSingletonContainerConfig extends ContainerConfig
{
    public function define(Container $di): void
    {
        for ($i = 1; $i <= 100; $i++) {
            $className = 'DiContainerBenchmarks\Fixture\Class' . $i;
            $di->set($className, $di->lazyNew($className));
        }
    }
}
