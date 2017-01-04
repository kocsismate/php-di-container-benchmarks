<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class21
{
    private $dependency;

    public function __construct(Class20 $dependency)
    {
        $this->dependency = $dependency;
    }
}
