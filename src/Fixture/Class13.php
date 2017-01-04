<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class13
{
    private $dependency;

    public function __construct(Class12 $dependency)
    {
        $this->dependency = $dependency;
    }
}
