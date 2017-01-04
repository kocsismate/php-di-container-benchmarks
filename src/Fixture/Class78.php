<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class78
{
    private $dependency;

    public function __construct(Class77 $dependency)
    {
        $this->dependency = $dependency;
    }
}
