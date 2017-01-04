<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class19
{
    private $dependency;

    public function __construct(Class18 $dependency)
    {
        $this->dependency = $dependency;
    }
}
