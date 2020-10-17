<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

interface BenchmarkContextInterface
{
    public function clear(): void;

    public function getTestOutput(int $testSuite, int $testCase, string $container): string;
}
