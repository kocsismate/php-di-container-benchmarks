<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

final class TestSuite4 implements TestSuiteInterface
{
    public function getNumber(): int
    {
        return 4;
    }

    public function getTitle(): string
    {
        return "Instantiating a large number of small object graphs - Prototype scope";
    }

    public function getDescription(): string
    {
        return <<<HERE
In this Test Suite, containers have to instantiate 1000 different objects (defined as Singletons) 10 times.
The first test case includes autoloading and bootstrap time of the containers in the measurements. The second
test case excludes these. The third one warms up the container before the measurements.
HERE;
    }

    public function getTestCases(): array
    {
        $classes = [];
        for ($i = 1; $i <= 1000; $i++) {
            $classes[] = "DiContainerBenchmarks\\Fixture\\B\\FixtureB$i";
        }

        return [
            new TestCase(
                1,
                10,
                TestCase::COLD,
                false,
                $classes
            ),
            new TestCase(
                2,
                10,
                TestCase::WARM,
                false,
                $classes
            ),
            new TestCase(
                3,
                10,
                TestCase::HOT,
                false,
                $classes
            ),
        ];
    }
}
