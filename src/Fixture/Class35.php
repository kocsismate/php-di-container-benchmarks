<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class35
{
    private $dependency;

    public function __construct(Class34 $dependency)
    {
        $this->dependency = $dependency;
    }
}
