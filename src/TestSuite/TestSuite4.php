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
        return "Fetching the same big object graph (100 objects)";
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
