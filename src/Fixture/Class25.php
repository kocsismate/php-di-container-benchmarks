<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class25
{
    private $dependency;

    public function __construct(Class24 $dependency)
    {
        $this->dependency = $dependency;
    }
}
