<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class51
{
    private $dependency;

    public function __construct(Class50 $dependency)
    {
        $this->dependency = $dependency;
    }
}
