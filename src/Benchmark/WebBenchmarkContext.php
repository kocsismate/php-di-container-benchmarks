<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Benchmark;

class WebBenchmarkContext implements BenchmarkContextInterface
{
    /**
     * @var string
     */
    private $benchmarkUrl;

    public function __construct(string $benchmarkUrl)
    {
        $this->benchmarkUrl = $benchmarkUrl;
    }

    public function getTestOutput(int $number, string $container, int $iterations, string $testType): string
    {
        $ch = curl_init();
        curl_setopt(
            $ch,
            CURLOPT_URL,
            $this->benchmarkUrl . "?test_suite=$number&container=$container&iterations=$iterations&test_type=$testType"
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        return $output ? $output : "";
    }
}
