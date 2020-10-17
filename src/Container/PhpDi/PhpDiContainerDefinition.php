<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class PhpDiContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "php-di/php-di";
    }

    public function getName(): string
    {
        return "php-di";
    }

    public function getDisplayedName(): string
    {
        return "PHP-DI";
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
        return "http://php-di.org/";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new PhpDiContainerAdapter();
    }
}
