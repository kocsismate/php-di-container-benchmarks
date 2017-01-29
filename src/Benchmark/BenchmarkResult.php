<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Test\TestCase;
use DiContainerBenchmarks\Test\TestResult;
use DiContainerBenchmarks\TestSuite\TestSuiteInterface;

class BenchmarkResult
{
    /**
     * @var array
     */
    private $testResults;

    public function __construct()
    {
        $this->testResults = [];
    }

    public function addTestResult(
        TestSuiteInterface $testSuite,
        TestCase $testCase,
        ContainerInterface $container,
        TestResult $result
    ) {
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

        uasort($results, function(TestResult $a, TestResult $b) use ($results) {
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

    private function getMedian(array $array, $precision = 5): ?float
    {
        if (empty($array) || $array[0] === null) {
            return null;
        }

        sort($array, SORT_NUMERIC);

        $count = count($array);
        $middleIndex = (int) $count / 2;
        if ($count % 2 == 0) {
            $median = ($array[$middleIndex] + $array[$middleIndex + 1]) / 2;
        } else {
            $median = $array[$middleIndex];
        }

        return round($median, $precision);
    }

    private function getAverage(array $array, $precision = 5): ?float
    {
        if (empty($array) || $array[0] === null) {
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
}
