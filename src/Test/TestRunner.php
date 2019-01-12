<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use function class_exists;
use function hrtime;
use function memory_get_peak_usage;

class TestRunner
{
    public function runTest(
        int $testSuiteNumber,
        string $container,
        int $iterations,
        string $testType
    ): TestResult {
        $class = "DiContainerBenchmarks\\Container\\$container\\Test$testSuiteNumber";
        if (class_exists($class) === false) {
            return TestResult::createUnsuccessful("Class '$class' doesn't exist!");
        }

        /** @var TestInterface $test */
        $test = new $class();
        if ($test instanceof TestInterface === false) {
            return TestResult::createUnsuccessful("Class '$class' isn't instance of TestInterface!");
        }

        try {
            switch ($testType) {
                case TestCase::COLD:
                    return $this->runColdTest($test, $iterations);
                case TestCase::SEMI_WARM:
                    return $this->runSemiWarmTest($test, $iterations);
                case TestCase::WARM:
                    return $this->runWarmTest($test, $iterations);
                default:
                    return TestResult::createUnsuccessful("Invalid test type: '$testType'");
            }
        } catch (UnsupportedTestException $exception) {
            return TestResult::createUnsuccessful($exception->getMessage());
        }
    }

    private function runColdTest(TestInterface $test, int $iterations): TestResult
    {
        $t1 = hrtime(true);

        $test->startup();

        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = hrtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runSemiWarmTest(TestInterface $test, int $iterations): TestResult
    {
        $test->startup();

        $t1 = hrtime(true);

        $test->startup();
        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = hrtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runWarmTest(TestInterface $test, int $iterations): TestResult
    {
        $test->startup();
        $test->run();

        $t1 = hrtime(true);

        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = hrtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }
}
