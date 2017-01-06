<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Fixture\Class10;

class Test1 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->{Class10::class}();
    }
}
