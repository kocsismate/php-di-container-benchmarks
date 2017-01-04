<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class48
{
    private $dependency;

    public function __construct(Class47 $dependency)
    {
        $this->dependency = $dependency;
    }
}
