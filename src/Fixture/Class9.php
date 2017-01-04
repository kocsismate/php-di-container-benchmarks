<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class9
{
    private $dependency;

    public function __construct(Class8 $dependency)
    {
        $this->dependency = $dependency;
    }
}
