<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite2 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 2;
    }

    public function getTitle(): string
    {
        return "\"Cold\" Retrieval of a big object graph (100 objects)";
    }

    public function getDescription(): string
    {
        return "";
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
