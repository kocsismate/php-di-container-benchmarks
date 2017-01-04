<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class86
{
    private $dependency;

    public function __construct(Class85 $dependency)
    {
        $this->dependency = $dependency;
    }
}
