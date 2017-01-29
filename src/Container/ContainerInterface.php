<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

interface ContainerInterface
{
    public function getPackage(): string;

    public function getNamespace(): string;

    public function getDisplayedName(): string;

    public function isCompiled(): bool;

    public function isAutowiringSupported(): bool;

    public function getUrl(): string;

    public function build(): void;
}
