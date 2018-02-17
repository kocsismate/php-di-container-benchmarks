<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite5 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 5;
    }

    public function getTitle(): string
    {
        return "\"Warm\" Fetching of the same small object graph (10 objects)";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to fetch an object graph of 10 objects (defined as Singletons) 1000, 10 000 and 100 000
times. Neither autoloading time, nor startup time are included in the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "1000 iterations, bootstrap time excluded", 1000, TestCase::WARM),
            new TestCase(2, "10 000 iterations, bootstrap time excluded", 10000, TestCase::WARM),
            new TestCase(3, "100 000 iterations, bootstrap time excluded", 100000, TestCase::WARM),
        ];
    }
}
