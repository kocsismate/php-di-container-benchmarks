<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class91
{
    private $dependency;

    public function __construct(Class90 $dependency)
    {
        $this->dependency = $dependency;
    }
}
