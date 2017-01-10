<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Fixture\Class100;

class Test6 extends AbstractYacoTest
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
