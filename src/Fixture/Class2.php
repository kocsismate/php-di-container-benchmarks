<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class2
{
    private $dependency;

    public function __construct(Class1 $dependency)
    {
        $this->dependency = $dependency;
    }
}
