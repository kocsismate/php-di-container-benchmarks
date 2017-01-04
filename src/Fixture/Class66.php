<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class66
{
    private $dependency;

    public function __construct(Class65 $dependency)
    {
        $this->dependency = $dependency;
    }
}
