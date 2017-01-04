<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class29
{
    private $dependency;

    public function __construct(Class28 $dependency)
    {
        $this->dependency = $dependency;
    }
}
