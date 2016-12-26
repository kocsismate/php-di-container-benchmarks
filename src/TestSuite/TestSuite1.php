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
        return "Instantiation of a new object";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 000 iterations, startup time included", 10000, true),
            new TestCase(2, "10 000 iterations, startup time excluded", 10000, false),
        ];
    }
}
