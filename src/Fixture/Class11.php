<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class11
{
    private $dependency;

    public function __construct(Class10 $dependency)
    {
        $this->dependency = $dependency;
    }
}
