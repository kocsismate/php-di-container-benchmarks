<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

interface TestInterface
{
    public function startup(): void;

    public function run(): void;

    /**
     * This method MUST return true if the test can be run or throw a UnsupportedFeatureException otherwise.
     *
     * @throws UnsupportedFeatureException
     * @return bool
     */
    public function supported(): bool;
}
