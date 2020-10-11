<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;
use InvalidArgumentException;

use function count;
use function round;
use function sort;
use function uasort;

use const SORT_NUMERIC;

final class BenchmarkResult
{
    /** @var array<mixed, mixed> */
    private array $testResults = [];

    public function addTestResult(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerInterface $container,
        TestResult $result
    ): void {
        $containerName = $container->getDisplayedName();
        $testSuiteNumber = $testSuite->getNumber();
        $testCaseNumber = $testCase->getNumber();

        $this->testResults[$testSuiteNumber][$testCaseNumber][$containerName][] = $result;
    }

    public function getResult(TestSuiteInterface $testSuite, TestCase $testCase, string $containerName): TestResult
    {
        $testSuiteNumber = $testSuite->getNumber();
        $testCaseNumber = $testCase->getNumber();

        if (isset($this->testResults[$testSuiteNumber][$testCaseNumber][$containerName]) === false) {
            throw new InvalidArgumentException("No result with the given parameters exists");
        }

        return $this->calculateResults($this->testResults[$testSuiteNumber][$testCaseNumber][$containerName]);
    }

    /**
     * @return TestResult[]
     */
    public function getResults(TestSuiteInterface $testSuite, TestCase $testCase): array
    {
        $testSuiteNumber = $testSuite->getNumber();
        $testCaseNumber = $testCase->getNumber();

        if (isset($this->testResults[$testSuiteNumber][$testCaseNumber]) === false) {
            return [];
        }

        $results = [];
        foreach ($this->testResults[$testSuiteNumber][$testCaseNumber] as $containerName => $containerResults) {
            $results[$containerName] = $this->calculateResults($containerResults);
        }

        uasort($results, static function (TestResult $a, TestResult $b): int {
            if ($a->getTimeConsumptionInMilliSeconds() === null && $b->getTimeConsumptionInMilliSeconds() !== null) {
                return 1;
            }

            if ($a->getTimeConsumptionInMilliSeconds() !== null && $b->getTimeConsumptionInMilliSeconds() === null) {
                return -1;
            }

            return $a->getTimeConsumptionInMilliSeconds() <=> $b->getTimeConsumptionInMilliSeconds();
        });

        return $results;
    }

    /**
     * @param TestResult[] $containerResults
     */
    private function calculateResults(array $containerResults): TestResult
    {
        $timeResults = [];
        $memoryResults = [];
        foreach ($containerResults as $item) {
            $timeResults[] = $item->getTimeConsumptionInMilliSeconds();
            $memoryResults[] = $item->getPeakMemoryUsageInMegaBytes();
        }

        return TestResult::createFromValues(
            $this->getMedian($timeResults),
            $this->getMedian($memoryResults)
        );
    }

    /**
     * @param array<int, float|null> $results
     */
    private function getMedian(array $results, int $precision = 5): ?float
    {
        if ($results === [] || $results[0] === null) {
            return null;
        }

        sort($results, SORT_NUMERIC);

        $count = count($results);
        $middleIndex = $count / 2;
        if ($count % 2 === 0) {
            $median = ($results[$middleIndex] + $results[$middleIndex + 1]) / 2;
        } else {
            $median = $results[$middleIndex];
        }

        return round($median, $precision);
    }
}
