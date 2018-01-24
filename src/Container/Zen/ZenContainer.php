<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Container\Zen\Resource\PrototypeCompilerConfig;
use DiContainerBenchmarks\Container\Zen\Resource\SingletonCompilerConfig;
use WoohooLabs\Zen\Container\Builder\FileSystemContainerBuilder;

class ZenContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "woohoolabs/zen";
    }

    public function getNamespace(): string
    {
        return "Zen";
    }

    public function getDisplayedName(): string
    {
        return "Zen";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://github.com/woohoolabs/zen";
    }

    public function build(): void
    {
        // Build container with prototype services
        $builder = new FileSystemContainerBuilder(
            new PrototypeCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledPrototypeContainer.php"
        );
        $builder->build();

        // Build container with singleton services
        $builder = new FileSystemContainerBuilder(
            new SingletonCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledSingletonContainer.php"
        );
        $builder->build();
    }
}
