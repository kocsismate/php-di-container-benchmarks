<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\TestSuite;

use DiContainerBenchmarks\Test\TestCase;

interface TestSuiteInterface
{
    public function getNumber(): int;

    public function getTitle(): string;

    public function getDescription(): string;

    /**
     * @return TestCase[]
     */
    public function getTestCases(): array;
}
