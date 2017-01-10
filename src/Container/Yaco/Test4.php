<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Test\UnsupportedFeatureException;

class Test4 extends AbstractYacoTest
{
    public function startup(): void
    {
        throw new UnsupportedFeatureException('Yaco cannot act as a factory.');
    }

    public function run(): void
    {
    }
}
