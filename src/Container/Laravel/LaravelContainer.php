<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Container\ContainerInterface;

class LaravelContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "illuminate/container";
    }

    public function getNamespace(): string
    {
        return "Laravel";
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

    public function build(): void
    {
    }
}
