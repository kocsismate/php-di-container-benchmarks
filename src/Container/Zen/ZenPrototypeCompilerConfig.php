<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use WoohooLabs\Zen\Config\AbstractCompilerConfig;
use WoohooLabs\Zen\Config\FileBasedDefinition\FileBasedDefinitionConfig;
use WoohooLabs\Zen\Config\FileBasedDefinition\FileBasedDefinitionConfigInterface;

class ZenPrototypeCompilerConfig extends AbstractCompilerConfig
{
    public function getContainerNamespace(): string
    {
        return "DiContainerBenchmarks\\Container\\Zen\\Resource";
    }

    public function getContainerClassName(): string
    {
        return "CompiledPrototypeContainer";
    }

    public function useConstructorInjection(): bool
    {
        return true;
    }

    public function usePropertyInjection(): bool
    {
        return false;
    }

    public function getFileBasedDefinitionConfig(): FileBasedDefinitionConfigInterface
    {
        return FileBasedDefinitionConfig::disabledGlobally("PrototypeDefinitions");
    }

    public function getContainerConfigs(): array
    {
        return [
            new ZenPrototypeContainerConfig(),
        ];
    }
}
