<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Test;

use function number_format;

final class TestCase
{
    public const COLD = "cold";
    public const WARM = "semi_warm";
    public const HOT = "hot";

    private int $number;
    private int $iterations;
    private string $mode;
    private bool $singleton;
    /** @var string[] */
    private array $classesToRetrieve;

    /**
     * @param string[] $classesToRetrieve
     */
    public function __construct(
        int $number,
        int $iterations,
        string $testType,
        bool $isSingleton,
        array $classesToRetrieve
    ) {
        $this->number = $number;
        $this->iterations = $iterations;
        $this->mode = $testType;
        $this->singleton = $isSingleton;
        $this->classesToRetrieve = $classesToRetrieve;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getTitle(): string
    {
        $title = number_format($this->iterations, 0, ".", " ");
        $title .= " iteration" . ($this->iterations > 1 ? "s" : "") . ", ";

        switch ($this->mode) {
            case self::COLD:
                $title .= "container bootstrap time included";
                break;
            case self::WARM:
                $title .= "container bootstrap time excluded";
                break;
            case self::HOT:
                $title .= "container already warmed up";
                break;
        }

        return $title;
    }

    public function getIterations(): int
    {
        return $this->iterations;
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function isSingleton(): bool
    {
        return $this->singleton;
    }

    /**
     * @return string[]
     */
    public function getClassesToRetrieve(): array
    {
        return $this->classesToRetrieve;
    }
}
