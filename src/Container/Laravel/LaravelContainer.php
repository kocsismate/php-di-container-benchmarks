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

    public function build(): void
    {
    }
}
