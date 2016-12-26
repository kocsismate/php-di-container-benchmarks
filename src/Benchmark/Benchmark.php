<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Outputter\OutputterInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

class Benchmark
{
    /**
     * @param TestSuiteInterface[] $testSuites
     * @param ContainerInterface[] $containers
     * @param OutputterInterface[] $outputters
     */
    public function runBenchmark(array $testSuites, array $containers, array $outputters): void
    {
        $benchmarkResult = new BenchmarkResult();

        echo "Setting up containers...\n";
        foreach ($containers as $container) {
            echo "Setting up " . $container->getName() . "...\n";
            $container->setup();
        }

        foreach ($testSuites as $testSuite) {
            foreach ($testSuite->getTestCases() as $testCase) {
                foreach ($containers as $container) {
                    $this->runTest($testSuite, $testCase, $container, $benchmarkResult);
                }
            }
        }

        foreach ($outputters as $outputter) {
            $outputter->output($testSuites, $benchmarkResult);
        }
    }

    private function runTest(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerInterface $container,
        BenchmarkResult $benchmarkResult
    ): void {
        for ($run = 0; $run < 10; $run++) {
            echo "Running test case '" . $testSuite->getNumber() . "/" . $testCase->getNumber() .
                "' (" . $container->getName() . '): ' . ($run+1) . "/10\n";

            $number = $testSuite->getNumber();
            $containerName = $container->getName();
            $iterations = $testCase->getIterations();
            $isSetupIncludedInTimeConsumption = (int) $testCase->isSetupIncludedInTimeConsumption();
            exec("/code/bin/test $number $containerName $iterations $isSetupIncludedInTimeConsumption", $output, $code);

            if ($code !== 0) {
                echo "Test failed:\n";
                var_dump($output);
            }

            $testResult = TestResult::createFromJson($output[0] ?? "");
            $benchmarkResult->addTestResult($testSuite, $testCase, $container, $testResult);
        }
    }
}
