<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class67
{
    private $dependency;

    public function __construct(Class66 $dependency)
    {
        $this->dependency = $dependency;
    }
}
