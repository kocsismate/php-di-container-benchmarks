<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class31
{
    private $dependency;

    public function __construct(Class30 $dependency)
    {
        $this->dependency = $dependency;
    }
}
