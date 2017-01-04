<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class87
{
    private $dependency;

    public function __construct(Class86 $dependency)
    {
        $this->dependency = $dependency;
    }
}
