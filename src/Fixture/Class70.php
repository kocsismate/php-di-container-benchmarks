<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class70
{
    private $dependency;

    public function __construct(Class69 $dependency)
    {
        $this->dependency = $dependency;
    }
}
