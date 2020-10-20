<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite5 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 5;
    }

    public function getTitle(): string
    {
        return "Instantiating a single, large sized object graph - Singleton scope";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to instantiate the same object graph of 1000 objects (defined as Singletons) 100 and 10 000 times.
The first test case includes autoloading and bootstrap time of the containers in the measurements. The second
test case excludes these. The third one warms up the container before the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(
                1,
                100,
                TestCase::COLD,
                true,
                [FixtureC1000::class]
            ),
            new TestCase(
                2,
                100,
                TestCase::WARM,
                true,
                [FixtureC1000::class]
            ),
            new TestCase(
                3,
                10_000,
                TestCase::HOT,
                true,
                [FixtureC1000::class]
            ),
        ];
    }
}
