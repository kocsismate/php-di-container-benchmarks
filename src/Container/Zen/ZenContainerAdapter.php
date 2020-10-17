<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\Zen\Resource\CompiledPrototypeContainer;
use DiContainerBenchmarks\Container\Zen\Resource\CompiledSingletonContainer;
use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use Psr\Container\ContainerInterface;
use WoohooLabs\Zen\Container\Builder\FileSystemContainerBuilder;

final class ZenContainerAdapter implements ContainerAdapterInterface
{
    private ContainerInterface $container;

    public function build(): void
    {
        // Build container with prototype services
        $builder = new FileSystemContainerBuilder(
            new ZenPrototypeCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledPrototypeContainer.php",
            ""
        );
        $builder->build();

        // Build container with singleton services
        $builder = new FileSystemContainerBuilder(
            new ZenSingletonCompilerConfig(),
            PROJECT_ROOT . "/src/Container/Zen/Resource/CompiledSingletonContainer.php",
            ""
        );
        $builder->build();
    }

    public function bootstrapSingletonContainer()
    {
        return new CompiledSingletonContainer();
    }

    public function bootstrapPrototypeContainer()
    {
        return new CompiledPrototypeContainer();
    }
}
