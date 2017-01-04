<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class50
{
    private $dependency;

    public function __construct(Class49 $dependency)
    {
        $this->dependency = $dependency;
    }
}
