<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Fixture\Class10;

class Test3 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->{Class10::class}();
    }
}
