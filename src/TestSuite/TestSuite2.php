<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite2 implements TestSuiteInterface
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
        return <<<HERE
In this Test Suite, containers have to fetch an object graph of 100 objects (defined as Singletons) 10, 100 and 1000
times. Autoloading and bootstrap time of the containers are included in the measurements. That's why this Test Suite
simulates production usage very well.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(1, "10 iterations, autoload + bootstrap time included", 10, TestCase::COLD, true, Class100::class),
            new TestCase(2, "100 iterations, autoload + bootstrap time included", 100, TestCase::COLD, true, Class100::class),
            new TestCase(3, "1000 iterations, autoload + bootstrap time included", 1000, TestCase::COLD, true, Class100::class),
        ];
    }
}
