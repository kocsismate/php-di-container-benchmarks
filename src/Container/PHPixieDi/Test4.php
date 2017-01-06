<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractPHPixieDiTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->{Class100::class}();;
    }
}
