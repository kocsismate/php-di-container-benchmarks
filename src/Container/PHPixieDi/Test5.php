<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

final class Test5 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->c10();
    }
}
