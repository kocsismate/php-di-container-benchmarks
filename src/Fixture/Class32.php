<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class32
{
    private $dependency;

    public function __construct(Class31 $dependency)
    {
        $this->dependency = $dependency;
    }
}
