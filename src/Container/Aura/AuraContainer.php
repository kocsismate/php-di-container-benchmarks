<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use DiContainerBenchmarks\Container\ContainerInterface;

class AuraContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "aura/di";
    }

    public function getNamespace(): string
    {
        return "Aura";
    }

    public function getDisplayedName(): string
    {
        return "Aura";
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
        return "https://github.com/auraphp/Aura.Di";
    }

    public function build(): void
    {
    }
}
