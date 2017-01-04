<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class59
{
    private $dependency;

    public function __construct(Class58 $dependency)
    {
        $this->dependency = $dependency;
    }
}
