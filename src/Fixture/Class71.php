<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class71
{
    private $dependency;

    public function __construct(Class70 $dependency)
    {
        $this->dependency = $dependency;
    }
}
