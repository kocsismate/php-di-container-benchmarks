<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Fixture\A\FixtureA10;
use DiContainerBenchmarks\Fixture\A\FixtureA100;
use DiContainerBenchmarks\Fixture\C\FixtureC1000;
use WoohooLabs\Zen\Config\AbstractContainerConfig;
use WoohooLabs\Zen\Config\EntryPoint\Psr4NamespaceEntryPoint;
use WoohooLabs\Zen\Config\Hint\Psr4WildcardHint;

class ZenPrototypeContainerConfig extends AbstractContainerConfig
{
    protected function getEntryPoints(): array
    {
        return [
            FixtureA10::class,
            FixtureA100::class,
            FixtureC1000::class,
            Psr4NamespaceEntryPoint::create("DiContainerBenchmarks\\Fixture\\B"),
        ];
    }

    protected function getDefinitionHints(): array
    {
        return [];
    }

    protected function getWildcardHints(): array
    {
        return [
            Psr4WildcardHint::prototype(
                "DiContainerBenchmarks\\Fixture\\A\\FixtureA*",
                "DiContainerBenchmarks\\Fixture\\A\\FixtureA*"
            ),
            Psr4WildcardHint::prototype(
                "DiContainerBenchmarks\\Fixture\\B\\FixtureB*",
                "DiContainerBenchmarks\\Fixture\\B\\FixtureB*"
            ),
            Psr4WildcardHint::prototype(
                "DiContainerBenchmarks\\Fixture\\C\\FixtureC*",
                "DiContainerBenchmarks\\Fixture\\C\\FixtureC*"
            ),
        ];
    }
}
