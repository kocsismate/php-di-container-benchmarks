<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use bitExpert\Disco\AnnotationBeanFactory;
use bitExpert\Disco\BeanFactoryConfiguration;
use bitExpert\Disco\BeanFactoryRegistry;
use DiContainerBenchmarks\Container\Disco\Resource\PrototypeContainerConfig;
use DiContainerBenchmarks\Container\Disco\Resource\SingletonContainerConfig;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;
use ProxyManager\Autoloader\Autoloader;
use ProxyManager\FileLocator\FileLocator;
use ProxyManager\Inflector\ClassNameInflector;

abstract class AbstractDiscoTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $beanFactory = new AnnotationBeanFactory(
            PrototypeContainerConfig::class,
            [],
            $this->getBeanFactoryConfiguration("CompiledPrototypeDisco")
        );
        BeanFactoryRegistry::register($beanFactory);

        $this->container = $beanFactory;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $beanFactory = new AnnotationBeanFactory(
            SingletonContainerConfig::class,
            [],
            $this->getBeanFactoryConfiguration("CompiledSingletonDisco")
        );
        BeanFactoryRegistry::register($beanFactory);

        $this->container = $beanFactory;
    }

    private function getBeanFactoryConfiguration($className): BeanFactoryConfiguration
    {
        $config = new BeanFactoryConfiguration(PROJECT_ROOT . "/src/Container/Disco/Resource/");
        $config->setProxyAutoloader(
            new Autoloader(
                new FileLocator(PROJECT_ROOT . "/src/Container/Disco/Resource/"),
                new ClassNameInflector($className)
            )
        );

        return $config;
    }
}
