<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class AuraContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "aura/di";
    }

    public function getName(): string
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

    public function getAdapter(): ContainerAdapterInterface
    {
        return new AuraContainerAdapter();
    }
}
