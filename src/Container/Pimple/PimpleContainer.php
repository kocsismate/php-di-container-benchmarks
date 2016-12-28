<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

use DiContainerBenchmarks\Container\ContainerInterface;

class PimpleContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Pimple";
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
        return "http://pimple.sensiolabs.org/";
    }

    public function build(): void
    {
    }
}
