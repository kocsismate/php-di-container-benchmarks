<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class33
{
    private $dependency;

    public function __construct(Class32 $dependency)
    {
        $this->dependency = $dependency;
    }
}
