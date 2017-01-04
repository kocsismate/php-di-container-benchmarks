<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class100
{
    private $dependency;

    public function __construct(Class99 $dependency)
    {
        $this->dependency = $dependency;
    }
}
