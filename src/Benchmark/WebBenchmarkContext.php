<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

use function curl_close;
use function curl_exec;
use function curl_init;
use function curl_setopt;
use function is_string;

use const CURLOPT_RETURNTRANSFER;
use const CURLOPT_URL;

final class WebBenchmarkContext implements BenchmarkContextInterface
{
    private string $benchmarkUrl;

    public function __construct(string $benchmarkUrl)
    {
        $this->benchmarkUrl = $benchmarkUrl;
    }

    public function clear(): void
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            $this->benchmarkUrl . "?clear=1"
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_close($ch);
    }

    public function getTestOutput(int $testSuite, int $testCase, string $container): string
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            $this->benchmarkUrl . "?test_suite=$testSuite&test_case=$testCase&container=$container"
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        return is_string($output) ? $output : "";
    }
}
