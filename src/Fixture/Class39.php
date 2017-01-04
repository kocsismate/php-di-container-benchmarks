<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class39
{
    private $dependency;

    public function __construct(Class38 $dependency)
    {
        $this->dependency = $dependency;
    }
}
