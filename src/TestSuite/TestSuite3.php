<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite3 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 3;
    }

    public function getTitle(): string
    {
        return "\"Semi-Warm\" Instantiation of a small object graph (10 objects)";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to create an object graph of 10 objects (defined as Prototypes) 10, 100 and 1000
times. Container autoloading time is excluded while bootstrap time of the container is included in the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, bootstrap time included", 10, TestCase::SEMI_WARM, false, Class10::class),
            new TestCase(2, "100 iterations, bootstrap time included", 100, TestCase::SEMI_WARM, false, Class10::class),
            new TestCase(3, "1000 iterations, bootstrap time included", 1000, TestCase::SEMI_WARM, false, Class10::class),
        ];
    }
}
