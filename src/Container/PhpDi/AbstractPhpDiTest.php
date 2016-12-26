<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DI\ContainerBuilder;
use DiContainerBenchmarks\Test\TestInterface;
use Doctrine\Common\Cache\ApcuCache;
use Interop\Container\ContainerInterface;

abstract class AbstractPhpDiTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function startup(): void
    {
        $builder = new ContainerBuilder();
        $builder->setDefinitionCache(new ApcuCache());
        $builder->useAnnotations(false);

        $this->container = $builder->build();
    }
}
