<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

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
            return TestResult::createUnsuccessful();
        }

        /** @var TestInterface $test */
        $test = new $class();
        if ($test instanceof TestInterface === false) {
            return TestResult::createUnsuccessful();
        }

        if ($testType === TestCase::COLD) {
            return $this->runColdTest($test, $iterations);
        }

        if ($testType === TestCase::SEMI_WARM) {
            return $this->runSemiWarmTest($test, $iterations);
        }

        return $this->runWarmTest($test, $iterations);
    }

    private function runColdTest(TestInterface $test, int $iterations): TestResult
    {
        $t1 = microtime(true);

        $test->startup();

        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = microtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runSemiWarmTest(TestInterface $test, int $iterations): TestResult
    {
        $test->startup();

        $t1 = microtime(true);

        $test->startup();
        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = microtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }

    private function runWarmTest(TestInterface $test, int $iterations): TestResult
    {
        $test->startup();
        $test->run();

        $t1 = microtime(true);

        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = microtime(true);

        return TestResult::createFromMeasurement($t1, $t2, memory_get_peak_usage());
    }
}
