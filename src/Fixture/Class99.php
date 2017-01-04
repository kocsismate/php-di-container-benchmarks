<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class99
{
    private $dependency;

    public function __construct(Class98 $dependency)
    {
        $this->dependency = $dependency;
    }
}
