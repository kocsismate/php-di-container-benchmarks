<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class84
{
    private $dependency;

    public function __construct(Class83 $dependency)
    {
        $this->dependency = $dependency;
    }
}
