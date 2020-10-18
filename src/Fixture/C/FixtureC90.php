<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC90
{
    public function __construct(FixtureC89 $dependency)
    {
    }
}
