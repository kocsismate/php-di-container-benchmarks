<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Test\TestCase;

final class TestSuite1 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 1;
    }

    public function getTitle(): string
    {
        return "Instantiating an object graph of moderate size - Singleton scope";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to instantiate the same object graph of 100 objects (defined as Singletons) 1000 and 10 000
times. The first test case includes autoloading and bootstrap time of the containers in the measurements. The second
test case excludes these. The third one warms up the container before the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        return [
            new TestCase(
                1,
                1000,
                TestCase::COLD,
                true,
                [FixtureA100::class]
            ),
            new TestCase(
                2,
                1000,
                TestCase::WARM,
                true,
                [FixtureA100::class]
            ),
            new TestCase(
                3,
                100_000,
                TestCase::HOT,
                true,
                [FixtureA100::class]
            ),
        ];
    }
}
