<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura\Resource;

use Aura\Di\Container;
use Aura\Di\ContainerConfig;

class SingletonContainerConfig extends ContainerConfig
{
    public function define(Container $di)
    {
        for ($i = 1; $i <= 100; $i++) {
            $className = 'DiContainerBenchmarks\Fixture\Class' . $i;
            $di->set($className, $di->lazyNew($className));
        }
    }
}
