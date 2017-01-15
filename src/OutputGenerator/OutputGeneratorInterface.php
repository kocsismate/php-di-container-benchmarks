<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\OutputGenerator;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

interface OutputGeneratorInterface
{
    /**
     * @param TestSuiteInterface[] $testSuites
     */
    public function generateOutput(array $testSuites, array $containers, BenchmarkResult $benchmarkResult): void;
}
