<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;

abstract class AbstractDiscoTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected function getBeanFactoryConfiguration(): \bitExpert\Disco\BeanFactoryConfiguration
    {
        $config = new \bitExpert\Disco\BeanFactoryConfiguration(sys_get_temp_dir());
        $config->setProxyAutoloader(
            new \ProxyManager\Autoloader\Autoloader(
                new \ProxyManager\FileLocator\FileLocator(sys_get_temp_dir()),
                new \ProxyManager\Inflector\ClassNameInflector('Disco')
            )
        );
        return $config;
    }
}
