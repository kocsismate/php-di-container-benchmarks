<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite1 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 1;
    }

    public function getTitle(): string
    {
        return "\"Cold\" Retrieval of a small object graph (10 objects)";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to fetch an object graph of 10 objects (defined as Singletons) 10, 100 and 1000
times. Autoloading and startup time of the containers are included in the measurements as well as autoloading time of
the retrieved objects. That's why this Test Suite simulates production usage very well.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, autoload + startup time included", 10, TestCase::COLD),
            new TestCase(2, "100 iterations, autoload + startup time included", 100, TestCase::COLD),
            new TestCase(3, "1000 iterations, autoload + startup time included", 1000, TestCase::COLD),
        ];
    }
}
