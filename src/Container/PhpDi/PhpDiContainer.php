<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Container\ContainerInterface;

class PhpDiContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "PhpDi";
    }

    public function setup(): void
    {
    }
}
