<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class68
{
    private $dependency;

    public function __construct(Class67 $dependency)
    {
        $this->dependency = $dependency;
    }
}
