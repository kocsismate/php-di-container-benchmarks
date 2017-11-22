<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Cobalt;

use DiContainerBenchmarks\Container\ContainerInterface;

class CobaltContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "jshannon63/cobalt";
    }

    public function getNamespace(): string
    {
        return "Cobalt";
    }

    public function getDisplayedName(): string
    {
        return "Cobalt";
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
        return "https://github.com/jshannon63/cobalt";
    }

    public function build(): void
    {
    }
}
