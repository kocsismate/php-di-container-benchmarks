<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Fixture\Class100;

class Test2 extends AbstractJoomlaTest
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
