<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class6
{
    private $dependency;

    public function __construct(Class5 $dependency)
    {
        $this->dependency = $dependency;
    }
}
