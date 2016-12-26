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
        return "Constructor Injection of a big object graph";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "100 iterations, setup time included", 100, true),
            new TestCase(2, "100 iterations, setup time excluded", 100, false),
        ];
    }
}
