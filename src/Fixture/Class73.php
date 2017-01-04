<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class73
{
    private $dependency;

    public function __construct(Class72 $dependency)
    {
        $this->dependency = $dependency;
    }
}
