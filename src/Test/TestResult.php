<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

class TestResult
{
    /**
     * @var float|null
     */
    private $timeConsumption;

    /**
     * @var float|null
     */
    private $peakMemoryUsage;

    public static function createUnsuccessful(): TestResult
    {
        return new TestResult(null, null);
    }

    public static function createFromJson(string $json): TestResult
    {
        $result = json_decode($json, true);

        if ($result === null) {
            return new TestResult(null, null);
        }

        return new TestResult($result["time"], $result["memory"]);
    }

    public static function createFromMeasurement(
        float $startTime,
        float $endTime,
        int $peakMemoryUsageInBytes
    ): TestResult {
        return new TestResult(($endTime - $startTime) * 1000, $peakMemoryUsageInBytes / 1024 / 1024);
    }

    public static function createFromValues(
        ?float $timeConsumptionInMilliseconds,
        ?float $peakMemoryUsageInMegaBytes
    ): TestResult {
        return new TestResult($timeConsumptionInMilliseconds, $peakMemoryUsageInMegaBytes);
    }

    private function __construct(?float $timeConsumptionInMilliseconds, ?float $peakMemoryUsageInMegaBytes)
    {
        $this->timeConsumption = $timeConsumptionInMilliseconds;
        $this->peakMemoryUsage = $peakMemoryUsageInMegaBytes;
    }

    public function getTimeConsumptionInMilliSeconds(): ?float
    {
        return $this->timeConsumption;
    }

    public function getPeakMemoryUsageInMegaBytes(): ?float
    {
        return $this->peakMemoryUsage;
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
            ]
        );
    }
}
