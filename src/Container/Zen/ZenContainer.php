<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Container\ContainerInterface;
use DiContainerBenchmarks\Container\Zen\Resource\CompilerConfig;
use WoohooLabs\Zen\Container\Builder\FileSystemContainerBuilder;

class ZenContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Zen";
    }

    public function setup(): void
    {
        $builder = new FileSystemContainerBuilder();
        $builder->build('/code/src/Container/Zen/Resource/CompiledContainer.php', new CompilerConfig());
    }
}
