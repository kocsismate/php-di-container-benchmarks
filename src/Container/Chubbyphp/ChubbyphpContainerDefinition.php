<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class ChubbyphpContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "chubbyphp/chubbyphp-container";
    }

    public function getName(): string
    {
        return "chubbyphp";
    }

    public function getDisplayedName(): string
    {
        return "Chubbyphp";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return "https://github.com/chubbyphp/chubbyphp-container";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new ChubbyphpContainerAdapter();
    }
}
