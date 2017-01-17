<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

interface BenchmarkContextInterface
{
    public function getTestOutput(int $number, string $container, int $iterations, string $testType): string;
}
