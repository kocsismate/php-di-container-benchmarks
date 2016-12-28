<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

class TestSuite3 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 3;
    }

    public function getTitle(): string
    {
        return "Fetching the same small object graph (10 objects)";
    }

    public function getDescription(): string
    {
        return "";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 000 iterations, startup time included", 10000, true),
        ];
    }
}
