<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class10
{
    private $dependency;

    public function __construct(Class9 $dependency)
    {
        $this->dependency = $dependency;
    }
}
