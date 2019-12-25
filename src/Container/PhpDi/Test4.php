<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Test\UnsupportedTestException;

final class Test4 extends AbstractPhpDiTest
{
    public function startup(): void
    {
        throw new UnsupportedTestException('PHP-DI cannot act as a factory.');
    }

    public function run(): void
    {
    }
}
