<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco\Resource;

use bitExpert\Disco\Annotations\Configuration;
use bitExpert\Disco\Annotations\Bean;
use DiContainerBenchmarks\Fixture\Constructor\Class1;
use DiContainerBenchmarks\Fixture\Constructor\Class2;
use DiContainerBenchmarks\Fixture\Constructor\Class3;
use DiContainerBenchmarks\Fixture\Constructor\Class4;
use DiContainerBenchmarks\Fixture\Constructor\Class5;
use DiContainerBenchmarks\Fixture\Constructor\Class6;
use DiContainerBenchmarks\Fixture\Constructor\Class7;
use DiContainerBenchmarks\Fixture\Constructor\Class8;
use DiContainerBenchmarks\Fixture\Constructor\Class9;
use DiContainerBenchmarks\Fixture\Constructor\Class10;

/**
 * @Configuration
 */
class ContainerConfig
{
    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class1(): Class1
    {
        return new Class1();
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class2(): Class2
    {
        return new Class2($this->class1());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class3(): Class3
    {
        return new Class3($this->class2());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class4(): Class4
    {
        return new Class4($this->class3());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class5(): Class5
    {
        return new Class5($this->class4());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class6(): Class6
    {
        return new Class6($this->class5());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class7(): Class7
    {
        return new Class7($this->class6());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class8(): Class8
    {
        return new Class8($this->class7());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class9(): Class9
    {
        return new Class9($this->class8());
    }

    /**
     * @Bean({"singleton"=true, "lazy"=false, "scope"="request"})
     */
    public function class10(): Class10
    {
        return new Class10($this->class9());
    }
}
