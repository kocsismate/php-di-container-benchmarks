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

    public function build(): void
    {
    }
}
