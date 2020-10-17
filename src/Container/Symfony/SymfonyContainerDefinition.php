<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Symfony;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class SymfonyContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "symfony/dependency-injection";
    }

    public function getName(): string
    {
        return "symfony";
    }

    public function getDisplayedName(): string
    {
        return "Symfony";
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
        return "https://symfony.com/doc/current/components/dependency_injection.html";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new SymfonyContainerAdapter();
    }
}
