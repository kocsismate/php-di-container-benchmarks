<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Container\Zen\Resource\PrototypeCompilerConfig;
use DiContainerBenchmarks\Container\Zen\Resource\SingletonCompilerConfig;
use WoohooLabs\Zen\Container\Builder\FileSystemContainerBuilder;

class ZenContainer implements ContainerInterface
{
    public function getName(): string
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
        $builder = new FileSystemContainerBuilder();

        // Build container with prototype services
        $builder->build(
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledPrototypeContainer.php",
            new PrototypeCompilerConfig()
        );

        // Build container with singleton services
        $builder->build(
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledSingletonContainer.php",
            new SingletonCompilerConfig()
        );
    }
}
