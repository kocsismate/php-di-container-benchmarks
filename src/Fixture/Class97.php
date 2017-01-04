<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class97
{
    private $dependency;

    public function __construct(Class96 $dependency)
    {
        $this->dependency = $dependency;
    }
}
