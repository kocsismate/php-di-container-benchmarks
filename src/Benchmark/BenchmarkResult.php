<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

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
        foreach ($this->testResults[$testSuiteNumber][$testCaseNumber] as $containerName => $containerResult) {
            $timeResults = [];
            $memoryResults = [];
            foreach ($containerResult as $item) {
                /** @var TestResult $item */
                $timeResults[] = $item->getTimeConsumptionInMilliSeconds();
                $memoryResults[] = $item->getPeakMemoryUsageInMegaBytes();
            }

            $results[$containerName] = TestResult::createFromValues(
                $this->getMedian($timeResults),
                $this->getMedian($memoryResults)
            );
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
    /*
    private function getAverage(array $array, int $precision = 5): ?float
    {
        if ($array === [] || $array[0] === null) {
            return null;
        }

        sort($array, SORT_NUMERIC);

        $smallest = $array[0];
        $num = 0;
        $total = 0;

        foreach ($array as $val) {
            if ($val <= $smallest * 1.2) {
                $num++;
                $total += $val;
            }
        }

        return round($total / $num, $precision);
    }
    */
}
