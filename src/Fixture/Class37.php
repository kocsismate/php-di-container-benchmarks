<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class37
{
    private $dependency;

    public function __construct(Class36 $dependency)
    {
        $this->dependency = $dependency;
    }
}
