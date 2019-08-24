<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use function json_decode;
use function json_encode;

class TestResult
{
    /** @var float|null */
    private $timeConsumption;

    /** @var float|null */
    private $peakMemoryUsage;

    /** @var string */
    private $message;

    public static function createUnsuccessful(string $message): TestResult
    {
        return new TestResult(null, null, $message);
    }

    public static function createFromJson(string $json): TestResult
    {
        $result = json_decode($json, true);

        if ($result === null) {
            return new TestResult(null, null, "Invalid JSON response: '$json'!");
        }

        return new TestResult($result["time"], $result["memory"], $result["message"]);
    }

    public static function createFromMeasurement(
        float $startNanoseconds,
        float $endNanoseconds,
        int $peakMemoryUsageInBytes
    ): TestResult {
        return new TestResult(
            ($endNanoseconds - $startNanoseconds) / 1000000,
            $peakMemoryUsageInBytes / 1024 / 1024
        );
    }

    public static function createFromValues(
        ?float $timeConsumptionInMilliseconds,
        ?float $peakMemoryUsageInMegaBytes
    ): TestResult {
        return new TestResult($timeConsumptionInMilliseconds, $peakMemoryUsageInMegaBytes);
    }

    private function __construct(?float $timeConsumptionInMilliseconds, ?float $peakMemoryUsageInMegaBytes, string $message = "")
    {
        $this->timeConsumption = $timeConsumptionInMilliseconds;
        $this->peakMemoryUsage = $peakMemoryUsageInMegaBytes;
        $this->message = $message;
    }

    public function getTimeConsumptionInMilliSeconds(): ?float
    {
        return $this->timeConsumption;
    }

    public function getPeakMemoryUsageInMegaBytes(): ?float
    {
        return $this->peakMemoryUsage;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function isSuccessful(): bool
    {
        return $this->timeConsumption !== null && $this->peakMemoryUsage !== null;
    }

    public function toJson(): string
    {
        return json_encode(
            [
                "time" => $this->timeConsumption,
                "memory" => $this->peakMemoryUsage,
                "message" => $this->message,
            ]
        );
    }
}
