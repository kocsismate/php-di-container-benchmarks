<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen\Resource;

use WoohooLabs\Zen\Config\AbstractCompilerConfig;
use WoohooLabs\Zen\Config\Autoload\AutoloadConfig;
use WoohooLabs\Zen\Config\Autoload\AutoloadConfigInterface;

class PrototypeCompilerConfig extends AbstractCompilerConfig
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
        return true;
    }

    public function getAutoloadConfig(): AutoloadConfigInterface
    {
        return AutoloadConfig::disabledGlobally(PROJECT_ROOT);
    }

    public function getContainerConfigs(): array
    {
        return [
            new PrototypeContainerConfig(),
        ];
    }
}
