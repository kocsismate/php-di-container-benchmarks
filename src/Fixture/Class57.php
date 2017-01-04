<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class57
{
    private $dependency;

    public function __construct(Class56 $dependency)
    {
        $this->dependency = $dependency;
    }
}
