<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\LaminasServiceManager;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class LaminasServiceManagerContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "laminas/laminas-servicemanager";
    }

    public function getName(): string
    {
        return "laminas";
    }

    public function getDisplayedName(): string
    {
        return "ServiceManager";
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
        return "https://docs.laminas.dev/laminas-servicemanager/";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new LaminasServiceManagerContainerAdapter();
    }
}
