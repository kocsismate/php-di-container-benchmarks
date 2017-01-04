<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class95
{
    private $dependency;

    public function __construct(Class94 $dependency)
    {
        $this->dependency = $dependency;
    }
}
