<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use DiContainerBenchmarks\Container\ContainerInterface;

class DiscoContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Disco";
    }

    public function build(): void
    {
    }
}
