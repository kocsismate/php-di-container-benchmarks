<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture;

class Class43
{
    private $dependency;

    public function __construct(Class42 $dependency)
    {
        $this->dependency = $dependency;
    }
}
