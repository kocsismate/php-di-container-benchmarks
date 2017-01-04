<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class3
{
    private $dependency;

    public function __construct(Class2 $dependency)
    {
        $this->dependency = $dependency;
    }
}
