<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen\Resource;

use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use WoohooLabs\Zen\Config\AbstractContainerConfig;

class SingletonContainerConfig extends AbstractContainerConfig
{
    protected function getEntryPoints(): array
    {
        return [
            Class10::class,
            Class100::class,
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
