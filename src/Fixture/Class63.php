<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class63
{
    private $dependency;

    public function __construct(Class62 $dependency)
    {
        $this->dependency = $dependency;
    }
}
