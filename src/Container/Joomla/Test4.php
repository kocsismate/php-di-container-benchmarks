<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractJoomlaTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->buildObject(Class100::class);
    }
}
