<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

final class Test6 extends AbstractDiscoTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get("Class100");
    }
}
