<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\OutputGenerator\OutputGeneratorInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

class Benchmark
{
    /**
     * @var BenchmarkContextInterface
     */
    private $context;

    public function __construct(BenchmarkContextInterface $context)
    {
        $this->context = $context;
    }

    /**
     * @param TestSuiteInterface[] $testSuites
     * @param ContainerInterface[] $containers
     * @param OutputGeneratorInterface[] $outputGenerators
     */
    public function runBenchmark(array $testSuites, array $containers, array $outputGenerators): void
    {
        $benchmarkResult = new BenchmarkResult();

        $this->buildContainers($containers);
        $this->dumpAutoloader();

        foreach ($testSuites as $testSuite) {
            foreach ($testSuite->getTestCases() as $testCase) {
                foreach ($containers as $container) {
                    $this->runTest($testSuite, $testCase, $container, $benchmarkResult);
                }
            }
        }

        echo "Generating results...\n";
        foreach ($outputGenerators as $outputGenerator) {
            $outputGenerator->generateOutput($testSuites, $containers, $benchmarkResult);
        }

        echo "Benchmark finished successfully!\n";
    }

    /**
     * @param ContainerInterface[] $containers
     */
    private function buildContainers(array $containers): void
    {
        echo "Building containers...\n";
        foreach ($containers as $container) {
            $container->build();
        }
    }

    private function dumpAutoloader(): void
    {
        exec("composer dump-autoload --working-dir=" . PROJECT_ROOT . " --classmap-authoritative");
    }

    private function runTest(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerInterface $container,
        BenchmarkResult $benchmarkResult
    ): void {

        for ($run = 0; $run < 25; $run++) {
            echo "Running " . $this->context->getName() . " test " .
                $testSuite->getNumber() . "." . $testCase->getNumber() .
                " (" . $container->getName() . '): ' . ($run+1) . "/10\n";

            $number = $testSuite->getNumber();
            $containerName = $container->getName();
            $iterations = $testCase->getIterations();
            $testType = $testCase->getTestType();

            $output = $this->context->getTestOutput($number, $containerName, $iterations, $testType);
            $result = TestResult::createFromJson($output);
            $benchmarkResult->addTestResult($testSuite, $testCase, $container, $result);

            if ($result->isSuccessful() === false) {
                echo "Test failed:\n";
                var_dump($output);
                break;
            }
        }

        usleep(400000);
    }
}
