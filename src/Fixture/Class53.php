<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class53
{
    private $dependency;

    public function __construct(Class52 $dependency)
    {
        $this->dependency = $dependency;
    }
}
