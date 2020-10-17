<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\OutputGenerator;

use DiContainerBenchmarks\Benchmark\BenchmarkResult;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

interface OutputGeneratorInterface
{
    /**
     * @param TestSuiteInterface[] $testSuites
     * @param ContainerDefinitionInterface[] $containers
     */
    public function generateOutput(array $testSuites, array $containers, BenchmarkResult $benchmarkResult): void;
}
