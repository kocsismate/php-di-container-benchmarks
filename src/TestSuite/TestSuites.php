<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

final class TestSuites
{
    public static function getTestSuite(int $number): ?TestSuiteInterface
    {
        switch ($number) {
            case 1:
                return new TestSuite1();
            case 2:
                return new TestSuite2();
            case 3:
                return new TestSuite3();
            case 4:
                return new TestSuite4();
            case 5:
                return new TestSuite5();
            case 6:
                return new TestSuite6();
            default:
                return null;
        }
    }
}
