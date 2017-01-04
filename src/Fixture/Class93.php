<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class93
{
    private $dependency;

    public function __construct(Class92 $dependency)
    {
        $this->dependency = $dependency;
    }
}
