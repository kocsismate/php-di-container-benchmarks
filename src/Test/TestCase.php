<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

class TestCase
{
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
     * @var bool
     */
    private $startupTimeIncluded;

    public function __construct(int $number, string $title, int $iterations, bool $isStartupTimeIncluded)
    {
        $this->number = $number;
        $this->title = $title;
        $this->iterations = $iterations;
        $this->startupTimeIncluded = $isStartupTimeIncluded;
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

    public function isStartupTimeIncluded(): bool
    {
        return $this->startupTimeIncluded;
    }
}
