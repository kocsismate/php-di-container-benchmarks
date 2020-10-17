<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

final class TestSuites
{
    public static function getTestSuite(int $number): ?TestSuiteInterface
    {
        return match ($number) {
            1 => new TestSuite1(),
            2 => new TestSuite2(),
            3 => new TestSuite3(),
            4 => new TestSuite4(),
            5 => new TestSuite5(),
            6 => new TestSuite6(),
            default => null,
        };
    }
}
