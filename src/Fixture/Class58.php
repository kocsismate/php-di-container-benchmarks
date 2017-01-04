<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class58
{
    private $dependency;

    public function __construct(Class57 $dependency)
    {
        $this->dependency = $dependency;
    }
}
