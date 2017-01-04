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
        $test->startup();

        $t1 = microtime(true);
        $test->startup();
        $t2 = microtime(true);

        // Warming up
        $test->run();

        $t3 = microtime(true);
        for ($i = 0; $i < $iterations; $i++) {
            $test->run();
        }
        $t4 = microtime(true);

        return TestResult::create($t1, $t2, $t3, $t4, $isStartupTimeIncluded, memory_get_peak_usage());
    }
}
