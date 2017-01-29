<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\OpulenceIoc;

use DiContainerBenchmarks\Container\ContainerInterface;

class OpulenceIocContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "opulence/ioc";
    }

    public function getNamespace(): string
    {
        return "OpulenceIoc";
    }

    public function getDisplayedName(): string
    {
        return "Opulence IoC";
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
        return "https://www.opulencephp.com/docs/1.0/ioc-container";
    }

    public function build(): void
    {
    }
}
