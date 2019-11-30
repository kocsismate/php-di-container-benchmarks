<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

interface TestInterface
{
    public function startup(): void;

    public function run(): void;
}
