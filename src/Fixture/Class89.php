<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class89
{
    private $dependency;

    public function __construct(Class88 $dependency)
    {
        $this->dependency = $dependency;
    }
}
