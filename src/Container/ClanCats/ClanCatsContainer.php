<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ClanCats;

use DiContainerBenchmarks\Container\ContainerInterface;

use ClanCats\Container\ContainerFactory;

final class ClanCatsContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "clancats/container";
    }

    public function getNamespace(): string
    {
        return "ClanCats";
    }

    public function getDisplayedName(): string
    {
        return "ClanCatsContainer";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return "https://github.com/clancats/container";
    }

    public function build(): void
    {
        $factory = new ContainerFactory(PROJECT_ROOT . "/src/Container/ClanCats/Resource");

        $factory->create('DiContainerBenchmarks\Container\ClanCats\Resource\CCCompiledSingletonContainer', function($builder)
        {
            for ($i = 1; $i <= 100; $i++) {
                $dep = null;
                if ($i > 1) $dep = '@Class' . ($i - 1);
                $builder->add('Class' . $i, "DiContainerBenchmarks\\Fixture\\Class$i", [$dep]);
            }
        });

        $factory->create('DiContainerBenchmarks\Container\ClanCats\Resource\CCCompiledPrototypeContainer', function($builder)
        {
            for ($i = 1; $i <= 100; $i++) {
                $dep = null;
                if ($i > 1) $dep = '@Class' . ($i - 1);
                $builder->add('Class' . $i, "DiContainerBenchmarks\\Fixture\\Class$i", [$dep], false);
            }
        });
    }
}
