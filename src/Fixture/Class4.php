<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class4
{
    private $dependency;

    public function __construct(Class3 $dependency)
    {
        $this->dependency = $dependency;
    }
}
