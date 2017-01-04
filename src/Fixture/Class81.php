<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class81
{
    private $dependency;

    public function __construct(Class80 $dependency)
    {
        $this->dependency = $dependency;
    }
}
