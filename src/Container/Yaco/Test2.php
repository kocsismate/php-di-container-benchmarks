<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\UnsupportedFeatureException;

class Test2 extends AbstractYacoTest
{
    public function startup(): void
    {
        throw new UnsupportedFeatureException('Yaco cannot act as a factory.');
    }

    public function run(): void
    {
    }

    public function supported(): bool
    {
        throw new UnsupportedFeatureException('Yaco cannot act as a factory.');
    }
}
