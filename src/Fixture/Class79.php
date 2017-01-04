<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class79
{
    private $dependency;

    public function __construct(Class78 $dependency)
    {
        $this->dependency = $dependency;
    }
}
