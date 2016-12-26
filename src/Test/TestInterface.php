<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

interface TestInterface
{
    public function setup(): void;

    public function run(): void;
}
