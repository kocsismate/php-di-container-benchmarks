<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\BnfDi;

use DiContainerBenchmarks\Fixture\Class100;

class Test6 extends AbstractBnfDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
