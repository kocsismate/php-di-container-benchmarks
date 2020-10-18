<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class ZenContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "woohoolabs/zen";
    }

    public function getName(): string
    {
        return "zen";
    }

    public function getDisplayedName(): string
    {
        return "Zen";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://github.com/woohoolabs/zen";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new ZenContainerAdapter();
    }
}
