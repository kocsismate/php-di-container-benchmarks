<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

class WebBenchmarkContext implements BenchmarkContextInterface
{
    public function getName(): string
    {
        return "web";
    }

    public function getTestOutput(int $number, string $container, int $iterations, string $testType): string
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            getenv("TEST_URL") . "?test_suite=$number&container=$container&iterations=$iterations&test_type=$testType"
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        return $output ? $output : "";
    }
}
