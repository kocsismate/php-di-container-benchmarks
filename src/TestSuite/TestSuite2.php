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
        return "Constructor Injection of a bigger object graph";
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "1000 iterations, setup time included", 1000, true),
            new TestCase(2, "1000 iterations, setup time excluded", 1000, false),
        ];
    }
}
