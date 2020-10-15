<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ClanCats;

final class Test4 extends AbstractClanCatsTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->resolveClass100();
    }
}
