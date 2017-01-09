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
}
