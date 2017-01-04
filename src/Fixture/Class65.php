<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class65
{
    private $dependency;

    public function __construct(Class64 $dependency)
    {
        $this->dependency = $dependency;
    }
}
