<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class42
{
    private $dependency;

    public function __construct(Class41 $dependency)
    {
        $this->dependency = $dependency;
    }
}
