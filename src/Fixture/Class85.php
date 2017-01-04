<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class85
{
    private $dependency;

    public function __construct(Class84 $dependency)
    {
        $this->dependency = $dependency;
    }
}
