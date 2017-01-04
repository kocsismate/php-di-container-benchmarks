<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class92
{
    private $dependency;

    public function __construct(Class91 $dependency)
    {
        $this->dependency = $dependency;
    }
}
