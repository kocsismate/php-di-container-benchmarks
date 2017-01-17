<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

class Test4 extends AbstractDiscoTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get("Class100");
    }
}
