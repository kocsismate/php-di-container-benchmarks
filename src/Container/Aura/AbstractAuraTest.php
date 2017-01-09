<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use Aura\Di\Container;
use Aura\Di\ContainerBuilder;
use DiContainerBenchmarks\Container\Aura\Resource\PrototypeContainerConfig;
use DiContainerBenchmarks\Container\Aura\Resource\SingletonContainerConfig;
use DiContainerBenchmarks\Test\TestInterface;

abstract class AbstractAuraTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $containerBuilder = new ContainerBuilder();

        $this->container = $containerBuilder->newConfiguredInstance([new PrototypeContainerConfig()], true);
    }

    protected function setContainerWithSingletonServices(): void
    {
        $containerBuilder = new ContainerBuilder();

        $this->container = $containerBuilder->newConfiguredInstance([new SingletonContainerConfig()], true);
    }

    public function supported(): bool
    {
        return true;
    }
}
