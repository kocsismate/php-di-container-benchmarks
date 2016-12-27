<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ZendServiceManager;

use DiContainerBenchmarks\Container\ContainerInterface;

class ZendServiceManagerContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "ZendServiceManager";
    }

    public function build(): void
    {
    }
}
