<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class14
{
    private $dependency;

    public function __construct(Class13 $dependency)
    {
        $this->dependency = $dependency;
    }
}
