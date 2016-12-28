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

        echo "Building containers...\n";
        foreach ($containers as $container) {
            $container->build();
        }

        exec("composer dump-autoload --working-dir=/code --classmap-authoritative");

        foreach ($testSuites as $testSuite) {
            foreach ($testSuite->getTestCases() as $testCase) {
                foreach ($containers as $container) {
                    $this->runTest($testSuite, $testCase, $container, $benchmarkResult);
                }
            }
        }

        echo "Generating results...\n";

        foreach ($outputters as $outputter) {
            $outputter->output($testSuites, $containers, $benchmarkResult);
        }

        echo "Benchmark finished successfully!\n";
    }

    private function runTest(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerInterface $container,
        BenchmarkResult $benchmarkResult
    ): void {
        for ($run = 0; $run < 10; $run++) {
            echo "Running test " . $testSuite->getNumber() . "." . $testCase->getNumber() .
                " (" . $container->getName() . '): ' . ($run+1) . "/10\n";

            $number = $testSuite->getNumber();
            $containerName = $container->getName();
            $iterations = $testCase->getIterations();
            $isStartupTimeIncluded = (int) $testCase->isStartupTimeIncluded();
            exec("/code/bin/test $number $containerName $iterations $isStartupTimeIncluded", $output, $code);

            if ($code !== 0) {
                echo "Test failed:\n";
                var_dump($output);
            }

            $testResult = TestResult::createFromJson($output[0] ?? "");
            $benchmarkResult->addTestResult($testSuite, $testCase, $container, $testResult);
        }
    }
}
