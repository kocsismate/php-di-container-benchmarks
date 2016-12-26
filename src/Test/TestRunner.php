<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

class TestRunner
{
    public function runTest(
        int $testSuiteNumber,
        string $container,
        int $iterations,
        bool $isStartupTimeIncluded
    ): TestResult {
        $class = "DiContainerBenchmarks\\Container\\$container\\Test$testSuiteNumber";
        if (class_exists($class) === false) {
            return new TestResult(null, null);
        }

        /** @var TestInterface $test */
        $test = new $class();
        if ($test instanceof TestInterface === false) {
            return new TestResult(null, null);
        }

        // Warming up
        $test->setup();
        $test->run();

        // Starting benchmark
        if ($isStartupTimeIncluded) {
            $t1 = microtime(true);
            $test->setup();
        } else {
            $test->setup();
            $t1 = microtime(true);
        }

        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }

        $t2 = microtime(true);

        return TestResult::create($t1, $t2, memory_get_peak_usage());
    }
}
