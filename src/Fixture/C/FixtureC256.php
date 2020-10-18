<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Fixture\C;

class FixtureC256
{
    public function __construct(FixtureC255 $dependency)
    {
    }
}
