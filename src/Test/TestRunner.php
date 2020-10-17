<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitions;
use DiContainerBenchmarks\TestSuite\TestSuites;
use Throwable;

use function hrtime;
use function memory_get_peak_usage;

final class TestRunner
{
    public function runTest(
        int $testSuiteNumber,
        int $testCaseNumber,
        string $container
    ): TestResult {
        $containerDefinition = ContainerDefinitions::getContainerDefinition($container);
        if ($containerDefinition === null) {
            return TestResult::createUnsuccessful("Container \"$container\" doesn't exist");
        }

        $containerAdapter = $containerDefinition->getAdapter();

        $testSuite = TestSuites::getTestSuite($testSuiteNumber);
        if ($testSuite === null) {
            return TestResult::createUnsuccessful("Test suite \"$testSuiteNumber\" doesn't exist");
        }

        $testCase = $testSuite->getTestCases()[$testCaseNumber - 1] ?? null;
        if ($testCase === null) {
            return TestResult::createUnsuccessful("Test case \"$testCaseNumber\" doesn't exist");
        }

        try {
            return match ($testCase->getTestType()) {
                TestCase::COLD => $this->runColdTest($containerAdapter, $testCase),
                TestCase::SEMI_WARM => $this->runSemiWarmTest($containerAdapter, $testCase),
                TestCase::WARM => $this->runWarmTest($containerAdapter, $testCase),
                default => TestResult::createUnsuccessful("Test type \"$testType\" doesn't exist"),
            };
        } catch (Throwable $exception) {
            return TestResult::createUnsuccessful($exception->getMessage());
        }
    }

    private function runColdTest(ContainerAdapterInterface $adapter, TestCase $testCase): TestResult
    {
        $isSingleton = $testCase->isSingleton();
        $iterations = $testCase->getIterations();
        $class = $testCase->getClassToRetrieve();

        // Start benchmark
        $t1 = hrtime(true);

        $container = $isSingleton ? $adapter->bootstrapSingletonContainer() : $adapter->bootstrapPrototypeContainer();

        for ($i = 0; $i < $iterations; $i++) {
            $container->get($class);
        }

        $t2 = hrtime(true);
        // End benchmark

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runSemiWarmTest(ContainerAdapterInterface $adapter, TestCase $testCase): TestResult
    {
        $isSingleton = $testCase->isSingleton();
        $iterations = $testCase->getIterations();
        $class = $testCase->getClassToRetrieve();

        // Warm-up
        $isSingleton ? $adapter->bootstrapSingletonContainer() : $adapter->bootstrapPrototypeContainer();

        // Start benchmark
        $t1 = hrtime(true);

        $container = $isSingleton ? $adapter->bootstrapSingletonContainer() : $adapter->bootstrapPrototypeContainer();

        for ($i = 0; $i < $iterations; $i++) {
            $container->get($class);
        }

        $t2 = hrtime(true);
        // End benchmark

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runWarmTest(ContainerAdapterInterface $adapter, TestCase $testCase): TestResult
    {
        $isSingleton = $testCase->isSingleton();
        $iterations = $testCase->getIterations();
        $class = $testCase->getClassToRetrieve();

        // Warm-up
        $container = $isSingleton ? $adapter->bootstrapSingletonContainer() : $adapter->bootstrapPrototypeContainer();
        $container->get($class);

        // Start benchmark
        $t1 = hrtime(true);

        for ($i = 0; $i < $iterations; $i++) {
            $container->get($class);
        }

        $t2 = hrtime(true);
        // End benchmark

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }
}
