<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC11
{
    public function __construct(FixtureC10 $dependency)
    {
    }
}
