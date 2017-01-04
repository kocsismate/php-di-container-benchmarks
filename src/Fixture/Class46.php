<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class46
{
    private $dependency;

    public function __construct(Class45 $dependency)
    {
        $this->dependency = $dependency;
    }
}
