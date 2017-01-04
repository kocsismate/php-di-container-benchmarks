<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class90
{
    private $dependency;

    public function __construct(Class89 $dependency)
    {
        $this->dependency = $dependency;
    }
}
