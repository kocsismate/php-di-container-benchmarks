<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class96
{
    private $dependency;

    public function __construct(Class95 $dependency)
    {
        $this->dependency = $dependency;
    }
}
