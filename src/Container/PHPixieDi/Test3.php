<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

class Test3 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->c10();
    }
}
