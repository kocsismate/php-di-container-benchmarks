<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\BnfDi;

use DiContainerBenchmarks\Container\ContainerInterface;

class BnfDiContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return 'bnf/di';
    }

    public function getNamespace(): string
    {
        return 'BnfDi';
    }

    public function getDisplayedName(): string
    {
        return 'bnf/di';
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
        return 'https://github.com/bnf/di';
    }

    public function build(): void
    {
    }
}
