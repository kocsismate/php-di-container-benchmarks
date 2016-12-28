<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Container\ContainerInterface;

class LaravelContainer implements ContainerInterface
{
    public function getName(): string
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

    public function build(): void
    {
    }
}
