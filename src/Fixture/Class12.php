<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class12
{
    private $dependency;

    public function __construct(Class11 $dependency)
    {
        $this->dependency = $dependency;
    }
}
