<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class77
{
    private $dependency;

    public function __construct(Class76 $dependency)
    {
        $this->dependency = $dependency;
    }
}
