<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerDefinitionInterface;
use DiContainerBenchmarks\OutputGenerator\OutputGeneratorInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

use function hrtime;

final class Benchmark
{
    private BenchmarkContextInterface $context;

    public function __construct(BenchmarkContextInterface $context)
    {
        $this->context = $context;
    }

    /**
     * @param ContainerDefinitionInterface[] $containerDefinitions
     */
    public function buildContainers(array $containerDefinitions): void
    {
        echo "Building DI Containers...\n";
        foreach ($containerDefinitions as $containerDefinition) {
            echo "Building " . $containerDefinition->getDisplayedName() . ": ";
            $t1 = hrtime(true);
            $containerDefinition->getAdapter()->build();
            $t2 = hrtime(true);

            echo (($t2 - $t1) / 1000000) . " ms\n";
        }
    }

    /**
     * @param TestSuiteInterface[] $testSuites
     * @param ContainerDefinitionInterface[] $containerDefinitions
     * @param OutputGeneratorInterface[] $outputGenerators
     */
    public function runBenchmark(array $testSuites, array $containerDefinitions, array $outputGenerators): void
    {
        $benchmarkResult = new BenchmarkResult();

        foreach ($testSuites as $testSuite) {
            foreach ($testSuite->getTestCases() as $testCase) {
                foreach ($containerDefinitions as $containerDefinition) {
                    $this->runTest($testSuite, $testCase, $containerDefinition, $benchmarkResult);
                }
            }
        }

        echo "Generating results...\n";
        foreach ($outputGenerators as $outputGenerator) {
            $outputGenerator->generateOutput($testSuites, $containerDefinitions, $benchmarkResult);
        }

        echo "Benchmark finished successfully!\n";
    }

    private function runTest(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerDefinitionInterface $containerDefinition,
        BenchmarkResult $benchmarkResult
    ): void {
        $testSuiteNumber = $testSuite->getNumber();
        $testCaseNumber = $testCase->getNumber();
        $containerName = $containerDefinition->getDisplayedName();

        echo "Running test $testSuiteNumber.$testCaseNumber: $containerName";

        $this->context->clear();
        for ($run = 0; $run < 30; $run++) {
            $container = $containerDefinition->getName();

            $output = $this->context->getTestOutput($testSuiteNumber, $testCaseNumber, $container);
            $result = TestResult::createFromJson($output);
            $benchmarkResult->addTestResult($testSuite, $testCase, $containerDefinition, $result);

            if ($result->isSuccessful() === false) {
                echo "\nTest failed: " . $result->getMessage() . "\n";
                return;
            }
        }

        echo " (" . $benchmarkResult->getResult($testSuite, $testCase, $containerName)->getTimeConsumptionInMilliSeconds() . " ms)\n";
    }
}
