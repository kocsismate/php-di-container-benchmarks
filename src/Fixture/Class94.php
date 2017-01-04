<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class94
{
    private $dependency;

    public function __construct(Class93 $dependency)
    {
        $this->dependency = $dependency;
    }
}
