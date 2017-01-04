<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class18
{
    private $dependency;

    public function __construct(Class17 $dependency)
    {
        $this->dependency = $dependency;
    }
}
