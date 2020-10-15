<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ClanCats;

final class Test5 extends AbstractClanCatsTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->resolveClass10();
    }
}
