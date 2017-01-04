<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class75
{
    private $dependency;

    public function __construct(Class74 $dependency)
    {
        $this->dependency = $dependency;
    }
}
