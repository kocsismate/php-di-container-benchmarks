<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class54
{
    private $dependency;

    public function __construct(Class53 $dependency)
    {
        $this->dependency = $dependency;
    }
}
