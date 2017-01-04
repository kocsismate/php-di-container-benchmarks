<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class60
{
    private $dependency;

    public function __construct(Class59 $dependency)
    {
        $this->dependency = $dependency;
    }
}
