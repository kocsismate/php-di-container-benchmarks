<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class72
{
    private $dependency;

    public function __construct(Class71 $dependency)
    {
        $this->dependency = $dependency;
    }
}
