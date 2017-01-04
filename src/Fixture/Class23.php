<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class23
{
    private $dependency;

    public function __construct(Class22 $dependency)
    {
        $this->dependency = $dependency;
    }
}
