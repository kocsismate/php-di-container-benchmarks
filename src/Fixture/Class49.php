<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class49
{
    private $dependency;

    public function __construct(Class48 $dependency)
    {
        $this->dependency = $dependency;
    }
}
