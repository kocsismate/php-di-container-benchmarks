<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class83
{
    private $dependency;

    public function __construct(Class82 $dependency)
    {
        $this->dependency = $dependency;
    }
}
