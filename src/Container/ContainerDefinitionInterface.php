<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

interface ContainerDefinitionInterface
{
    public function getPackage(): string;

    public function getName(): string;

    public function getDisplayedName(): string;

    public function isCompiled(): bool;

    public function isAutowiringSupported(): bool;

    public function getUrl(): string;

    public function getAdapter(): ContainerAdapterInterface;
}
