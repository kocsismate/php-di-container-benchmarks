<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Test\UnsupportedFeatureException;

class Test3 extends AbstractPhpDiTest
{
    public function startup(): void
    {
        throw new UnsupportedFeatureException('PHP-DI cannot act as a factory.');
    }

    public function run(): void
    {
    }
}
