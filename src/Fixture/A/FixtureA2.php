<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\A;

class FixtureA2
{
    public function __construct(FixtureA1 $dependency)
    {
    }
}
