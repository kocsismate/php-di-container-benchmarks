<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

class Test6 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->c100();
    }
}
