<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

class Test1 extends AbstractDiscoTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get("Class10");
    }
}
