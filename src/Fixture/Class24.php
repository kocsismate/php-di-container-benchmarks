<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class24
{
    private $dependency;

    public function __construct(Class23 $dependency)
    {
        $this->dependency = $dependency;
    }
}
