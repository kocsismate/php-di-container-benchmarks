<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

interface ContainerInterface
{
    public function getName(): string;

    public function setup(): void;
}
