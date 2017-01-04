<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class28
{
    private $dependency;

    public function __construct(Class27 $dependency)
    {
        $this->dependency = $dependency;
    }
}
