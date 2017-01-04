<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class45
{
    private $dependency;

    public function __construct(Class44 $dependency)
    {
        $this->dependency = $dependency;
    }
}
