<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC2
{
    public function __construct(FixtureC1 $dependency)
    {
    }
}
