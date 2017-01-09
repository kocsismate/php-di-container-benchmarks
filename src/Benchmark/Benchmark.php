<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Outputter\OutputterInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\Test\UnsupportedFeatureException;
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

        exec("composer dump-autoload --working-dir=" . PROJECT_ROOT . " --classmap-authoritative");

        foreach ($testSuites as $testSuite) {
            foreach ($testSuite->getTestCases() as $testCase) {
                foreach ($containers as $container) {
                    $testClass = "DiContainerBenchmarks\\Container\\".$container->getName()."\\Test".$testSuite->getNumber();
                    $test = new $testClass();
                    try {
                        $test->supported();
                        $this->runTest($testSuite, $testCase, $container, $benchmarkResult);
                    } catch (UnsupportedFeatureException $e) {
                        echo $e->getMessage()."\n";
                    }
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
            $output = "";
            exec(
                PROJECT_ROOT . "/bin/test $number $containerName $iterations $isStartupTimeIncluded",
                $output,
                $code
            );

            if ($code !== 0) {
                echo "Test failed:\n";
                var_dump($output);
            }

            $testResult = TestResult::createFromJson($output[0] ?? "");
            $benchmarkResult->addTestResult($testSuite, $testCase, $container, $testResult);
        }
    }
}
