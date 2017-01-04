<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class80
{
    private $dependency;

    public function __construct(Class79 $dependency)
    {
        $this->dependency = $dependency;
    }
}
