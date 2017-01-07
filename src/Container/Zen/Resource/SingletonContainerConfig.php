<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen\Resource;

use WoohooLabs\Zen\Config\AbstractContainerConfig;
use WoohooLabs\Zen\Config\EntryPoint\WildcardEntryPoint;

class SingletonContainerConfig extends AbstractContainerConfig
{
    protected function getEntryPoints(): array
    {
        return [
            new WildcardEntryPoint(PROJECT_ROOT . "/src/Fixture")
        ];
    }

    protected function getDefinitionHints(): array
    {
        return [];
    }

    protected function getWildcardHints(): array
    {
        return [];
    }
}
