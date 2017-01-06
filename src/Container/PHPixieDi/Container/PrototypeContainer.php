<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi\Container;

use PHPixie\DI\Container\Root;

class PrototypeContainer extends Root
{
    protected function configure()
    {
        $prefix = 'DiContainerBenchmarks\Fixture\Class';
        $class = $prefix . '1';
        
        $this->callback('c1', function() use($class) {
            return new $class;
        });
        
        for ($i = 2; $i <= 100; $i++) {
            $class = $prefix . $i;
            $dependency = 'c' . ($i-1) ;
            $this->callback('c' . $i, function() use($class, $dependency) {
                return new $class($this->getValue($dependency, true, []));
            });
        }
    }
}
