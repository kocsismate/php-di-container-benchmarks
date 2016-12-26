<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use bitExpert\Disco\AnnotationBeanFactory;
use bitExpert\Disco\BeanFactoryRegistry;
use DiContainerBenchmarks\Container\Disco\Resource\ContainerConfig;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractDiscoTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function startup(): void
    {
        $beanFactory = new AnnotationBeanFactory(ContainerConfig::class);
        BeanFactoryRegistry::register($beanFactory);

        $this->container = $beanFactory;
    }
}
