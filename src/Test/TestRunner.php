<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use DiContainerBenchmarks\Container\ContainerDefinitions;
use DiContainerBenchmarks\TestSuite\TestSuites;
use Throwable;

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

        $testSuite = TestSuites::getTestSuite($testSuiteNumber);
        if ($testSuite === null) {
            return TestResult::createUnsuccessful("Test suite \"$testSuiteNumber\" doesn't exist");
        }

        $testCase = $testSuite->getTestCases()[$testCaseNumber - 1] ?? null;
        if ($testCase === null) {
            return TestResult::createUnsuccessful("Test case \"$testCaseNumber\" doesn't exist");
        }

        $adapter = $containerDefinition->getAdapter();

        try {
            return require __DIR__ . "/../../app/generated/test_case_{$testSuiteNumber}_{$testCaseNumber}.php";
        } catch (Throwable $exception) {
            return TestResult::createUnsuccessful($exception->getMessage());
        }
    }
}
