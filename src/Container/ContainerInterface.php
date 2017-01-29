<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

interface ContainerInterface
{
    public function getNamespace(): string;

    public function getName(): string;

    public function isCompiled(): bool;

    public function isAutowiringSupported(): bool;

    public function getUrl(): string;

    public function build(): void;
}
