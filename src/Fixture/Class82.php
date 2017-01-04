<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class82
{
    private $dependency;

    public function __construct(Class81 $dependency)
    {
        $this->dependency = $dependency;
    }
}
