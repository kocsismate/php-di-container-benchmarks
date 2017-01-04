<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class34
{
    private $dependency;

    public function __construct(Class33 $dependency)
    {
        $this->dependency = $dependency;
    }
}
