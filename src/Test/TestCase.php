<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

class TestCase
{
    public const COLD = "cold";

    public const SEMI_WARM = "semi_warm";

    public const WARM = "warm";

    /**
     * @var int
     */
    private $number;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $iterations;

    /**
     * @var string
     */
    private $testType;

    public function __construct(int $number, string $title, int $iterations, string $testType)
    {
        $this->number = $number;
        $this->title = $title;
        $this->iterations = $iterations;
        $this->testType = $testType;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIterations(): int
    {
        return $this->iterations;
    }

    public function getTestType(): string
    {
        return $this->testType;
    }
}
