<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC3
{
    public function __construct(FixtureC2 $dependency)
    {
    }
}
