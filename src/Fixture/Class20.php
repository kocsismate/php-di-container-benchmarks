<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class20
{
    private $dependency;

    public function __construct(Class19 $dependency)
    {
        $this->dependency = $dependency;
    }
}
