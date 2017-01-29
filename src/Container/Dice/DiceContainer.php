<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Container\ContainerInterface;

class DiceContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "level-2/dice";
    }

    public function getNamespace(): string
    {
        return "Dice";
    }

    public function getDisplayedName(): string
    {
        return "Dice";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://github.com/Level-2/Dice";
    }

    public function build(): void
    {
    }
}
