<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class44
{
    private $dependency;

    public function __construct(Class43 $dependency)
    {
        $this->dependency = $dependency;
    }
}
