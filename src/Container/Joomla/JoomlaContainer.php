<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Container\ContainerInterface;

class JoomlaContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "joomla/di";
    }

    public function getNamespace(): string
    {
        return "Joomla";
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

    public function build(): void
    {
    }
}
