<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

interface ContainerInterface
{
    public function getName(): string;

    public function isCompiled(): bool;

    public function isAutowiringSupported(): bool;

    public function build(): void;
}
