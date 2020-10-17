<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Container\ContainerDefinitionInterface;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;

final class LaravelContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "illuminate/container";
    }

    public function getName(): string
    {
        return "laravel";
    }

    public function getDisplayedName(): string
    {
        return "Laravel";
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
        return "https://laravel.com/docs/5.3/container";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new LaravelContainerAdapter();
    }
}
