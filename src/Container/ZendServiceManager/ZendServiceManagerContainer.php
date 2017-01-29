<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ZendServiceManager;

use DiContainerBenchmarks\Container\ContainerInterface;

class ZendServiceManagerContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "zendframework/zend-servicemanager";
    }

    public function getNamespace(): string
    {
        return "ZendServiceManager";
    }

    public function getDisplayedName(): string
    {
        return "Zend ServiceManager";
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
        return "https://zendframework.github.io/zend-servicemanager/";
    }

    public function build(): void
    {
    }
}
