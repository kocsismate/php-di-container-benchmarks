<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Yii2;

use DiContainerBenchmarks\Fixture\Class10;

class Test3 extends AbstractYii2Test
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get(Class10::class);
    }
}
