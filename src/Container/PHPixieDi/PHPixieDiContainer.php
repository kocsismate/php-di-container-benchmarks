<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Container\ContainerInterface;

class PHPixieDiContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "PHPixieDi";
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
        return "https://github.com/phpixie/di";
    }

    public function build(): void
    {
    }
}
