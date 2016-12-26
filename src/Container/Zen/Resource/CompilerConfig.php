<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen\Resource;

use WoohooLabs\Zen\Config\AbstractCompilerConfig;

class CompilerConfig extends AbstractCompilerConfig
{
    public function getContainerNamespace(): string
    {
        return "DiContainerBenchmarks\\Container\\Zen\\Resource";
    }

    public function getContainerClassName(): string
    {
        return "CompiledContainer";
    }

    public function useConstructorInjection(): bool
    {
        return true;
    }

    public function usePropertyInjection(): bool
    {
        return true;
    }

    public function getContainerConfigs(): array
    {
        return [
            new ContainerConfig(),
        ];
    }
}
