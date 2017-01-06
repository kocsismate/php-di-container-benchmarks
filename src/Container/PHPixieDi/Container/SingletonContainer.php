<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi\Container;

use PHPixie\DI\Container\Root;

class SingletonContainer extends Root
{
    protected function configure()
    {
        $prefix = 'DiContainerBenchmarks\Fixture\Class';
        $class = $prefix . '1';
        
        $this->build($class, function() use($class) {
            return new $class;
        });
        
        for ($i = 2; $i <= 100; $i++) {
            $class = $prefix . $i;
            $dependency = $prefix . ($i-1);
            $this->build($class, function() use($class, $dependency) {
                return new $class($this->getValue($dependency, true, []));
            });
        }
    }
}
