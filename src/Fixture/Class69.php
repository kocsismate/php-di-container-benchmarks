<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class69
{
    private $dependency;

    public function __construct(Class68 $dependency)
    {
        $this->dependency = $dependency;
    }
}
