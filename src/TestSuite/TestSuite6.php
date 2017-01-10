<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite6 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 6;
    }

    public function getTitle(): string
    {
        return "\"Warm\" Fetching the same big object graph (100 objects)";
    }

    public function getDescription(): string
    {
        return "";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "100 iterations, bootstrap time excluded", 100, TestCase::WARM),
            new TestCase(2, "1000 iterations, bootstrap time excluded", 1000, TestCase::WARM),
            new TestCase(3, "10 000 iterations, bootstrap time excluded", 10000, TestCase::WARM),
        ];
    }
}
