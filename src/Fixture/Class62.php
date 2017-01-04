<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class62
{
    private $dependency;

    public function __construct(Class61 $dependency)
    {
        $this->dependency = $dependency;
    }
}
