<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class15
{
    private $dependency;

    public function __construct(Class14 $dependency)
    {
        $this->dependency = $dependency;
    }
}
