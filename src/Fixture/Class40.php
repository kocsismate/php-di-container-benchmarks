<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class40
{
    private $dependency;

    public function __construct(Class39 $dependency)
    {
        $this->dependency = $dependency;
    }
}
