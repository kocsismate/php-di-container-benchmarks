<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class22
{
    private $dependency;

    public function __construct(Class21 $dependency)
    {
        $this->dependency = $dependency;
    }
}
