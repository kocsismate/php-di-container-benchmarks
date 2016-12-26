<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Outputter;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

interface OutputterInterface
{
    /**
     * @param TestSuiteInterface[] $testSuites
     */
    public function output(array $testSuites, BenchmarkResult $benchmarkResult): void;
}
