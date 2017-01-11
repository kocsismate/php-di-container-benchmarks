<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite4 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 4;
    }

    public function getTitle(): string
    {
        return "\"Semi-Warm\" Instantiation of a big object graph (100 objects)";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to create an object graph of 100 objects (defined as Prototypes) 10, 100 and 1000
times. Container autoloading time is excluded while startup time of the container and autoloading time of the retrieved
objects are included in the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, startup time included", 10, TestCase::SEMI_WARM),
            new TestCase(2, "100 iterations, startup time included", 100, TestCase::SEMI_WARM),
            new TestCase(3, "1000 iterations, startup time included", 1000, TestCase::SEMI_WARM),
        ];
    }
}
