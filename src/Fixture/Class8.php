<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class8
{
    private $dependency;

    public function __construct(Class7 $dependency)
    {
        $this->dependency = $dependency;
    }
}
