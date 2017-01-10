<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use bitExpert\Disco\AnnotationBeanFactory;
use bitExpert\Disco\BeanFactoryRegistry;
use DiContainerBenchmarks\Container\Disco\Resource\SingletonContainerConfig;

class Test6 extends AbstractDiscoTest
{
    public function startup(): void
    {
        $beanFactory = new AnnotationBeanFactory(SingletonContainerConfig::class);
        BeanFactoryRegistry::register($beanFactory);

        $this->container = $beanFactory;
    }

    public function run(): void
    {
        $this->container->get("Class100");
    }
}
