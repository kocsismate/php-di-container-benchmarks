<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class76
{
    private $dependency;

    public function __construct(Class75 $dependency)
    {
        $this->dependency = $dependency;
    }
}
