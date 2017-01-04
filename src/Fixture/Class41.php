<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class41
{
    private $dependency;

    public function __construct(Class40 $dependency)
    {
        $this->dependency = $dependency;
    }
}
