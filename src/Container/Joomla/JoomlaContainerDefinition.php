<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class JoomlaContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "joomla/di";
    }

    public function getName(): string
    {
        return "joomla";
    }

    public function getDisplayedName(): string
    {
        return "Joomla";
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
        return "https://github.com/joomla-framework/di";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new JoomlaContainerAdapter();
    }
}
