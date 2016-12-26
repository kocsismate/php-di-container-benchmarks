<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

class Test3 extends AbstractDiscoTest
{
    public function run(): void
    {
        $this->container->get("Class100");
    }
}
