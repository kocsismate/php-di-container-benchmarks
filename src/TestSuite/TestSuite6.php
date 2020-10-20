<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite6 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 6;
    }

    public function getTitle(): string
    {
        return "Instantiating a single, large sized object graph - Prototype scope";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to fetch an object graph of 100 objects (defined as Singletons) 1000, 10 000 and 100 000
times. Neither autoloading time, nor bootstrap time is included in the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(
                1,
                10,
                TestCase::COLD,
                false,
                [FixtureC1000::class]
            ),
            new TestCase(
                2,
                10,
                TestCase::WARM,
                false,
                [FixtureC1000::class]
            ),
            new TestCase(
                3,
                100,
                TestCase::HOT,
                false,
                [FixtureC1000::class]
            ),
        ];
    }
}
