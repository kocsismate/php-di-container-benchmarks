<?php

namespace ContainerCKIgSyQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class CompiledPrototypeContainer extends Container
{
    private $buildParameters;
    private $parameters;
    private $targetDirs = array();

    /*
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct(array $buildParameters = array())
    {
        $dir = $this->targetDirs[0] = \dirname(__DIR__);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->methodMap = array(
            'DiContainerBenchmarks\\Fixture\\Class10' => 'getClass10Service',
            'DiContainerBenchmarks\\Fixture\\Class100' => 'getClass100Service',
        );

        $this->aliases = array();
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /*
     * Gets the public 'DiContainerBenchmarks\Fixture\Class10' autowired service.
     *
     * @return \DiContainerBenchmarks\Fixture\Class10
     */
    protected function getClass10Service()
    {
        include_once $this->targetDirs[3].'/Fixture/Class1.php';
        include_once $this->targetDirs[3].'/Fixture/Class2.php';
        include_once $this->targetDirs[3].'/Fixture/Class3.php';
        include_once $this->targetDirs[3].'/Fixture/Class4.php';
        include_once $this->targetDirs[3].'/Fixture/Class5.php';
        include_once $this->targetDirs[3].'/Fixture/Class6.php';
        include_once $this->targetDirs[3].'/Fixture/Class7.php';
        include_once $this->targetDirs[3].'/Fixture/Class8.php';
        include_once $this->targetDirs[3].'/Fixture/Class9.php';
        include_once $this->targetDirs[3].'/Fixture/Class10.php';

        return new \DiContainerBenchmarks\Fixture\Class10(new \DiContainerBenchmarks\Fixture\Class9(new \DiContainerBenchmarks\Fixture\Class8(new \DiContainerBenchmarks\Fixture\Class7(new \DiContainerBenchmarks\Fixture\Class6(new \DiContainerBenchmarks\Fixture\Class5(new \DiContainerBenchmarks\Fixture\Class4(new \DiContainerBenchmarks\Fixture\Class3(new \DiContainerBenchmarks\Fixture\Class2(new \DiContainerBenchmarks\Fixture\Class1())))))))));
    }

    /*
     * Gets the public 'DiContainerBenchmarks\Fixture\Class100' autowired service.
     *
     * @return \DiContainerBenchmarks\Fixture\Class100
     */
    protected function getClass100Service()
    {
        include_once $this->targetDirs[3].'/Fixture/Class1.php';
        include_once $this->targetDirs[3].'/Fixture/Class2.php';
        include_once $this->targetDirs[3].'/Fixture/Class3.php';
        include_once $this->targetDirs[3].'/Fixture/Class4.php';
        include_once $this->targetDirs[3].'/Fixture/Class5.php';
        include_once $this->targetDirs[3].'/Fixture/Class6.php';
        include_once $this->targetDirs[3].'/Fixture/Class7.php';
        include_once $this->targetDirs[3].'/Fixture/Class8.php';
        include_once $this->targetDirs[3].'/Fixture/Class9.php';
        include_once $this->targetDirs[3].'/Fixture/Class10.php';
        include_once $this->targetDirs[3].'/Fixture/Class11.php';
        include_once $this->targetDirs[3].'/Fixture/Class12.php';
        include_once $this->targetDirs[3].'/Fixture/Class13.php';
        include_once $this->targetDirs[3].'/Fixture/Class14.php';
        include_once $this->targetDirs[3].'/Fixture/Class15.php';
        include_once $this->targetDirs[3].'/Fixture/Class16.php';
        include_once $this->targetDirs[3].'/Fixture/Class17.php';
        include_once $this->targetDirs[3].'/Fixture/Class18.php';
        include_once $this->targetDirs[3].'/Fixture/Class19.php';
        include_once $this->targetDirs[3].'/Fixture/Class20.php';
        include_once $this->targetDirs[3].'/Fixture/Class21.php';
        include_once $this->targetDirs[3].'/Fixture/Class22.php';
        include_once $this->targetDirs[3].'/Fixture/Class23.php';
        include_once $this->targetDirs[3].'/Fixture/Class24.php';
        include_once $this->targetDirs[3].'/Fixture/Class25.php';
        include_once $this->targetDirs[3].'/Fixture/Class26.php';
        include_once $this->targetDirs[3].'/Fixture/Class27.php';
        include_once $this->targetDirs[3].'/Fixture/Class28.php';
        include_once $this->targetDirs[3].'/Fixture/Class29.php';
        include_once $this->targetDirs[3].'/Fixture/Class30.php';
        include_once $this->targetDirs[3].'/Fixture/Class31.php';
        include_once $this->targetDirs[3].'/Fixture/Class32.php';
        include_once $this->targetDirs[3].'/Fixture/Class33.php';
        include_once $this->targetDirs[3].'/Fixture/Class34.php';
        include_once $this->targetDirs[3].'/Fixture/Class35.php';
        include_once $this->targetDirs[3].'/Fixture/Class36.php';
        include_once $this->targetDirs[3].'/Fixture/Class37.php';
        include_once $this->targetDirs[3].'/Fixture/Class38.php';
        include_once $this->targetDirs[3].'/Fixture/Class39.php';
        include_once $this->targetDirs[3].'/Fixture/Class40.php';
        include_once $this->targetDirs[3].'/Fixture/Class41.php';
        include_once $this->targetDirs[3].'/Fixture/Class42.php';
        include_once $this->targetDirs[3].'/Fixture/Class43.php';
        include_once $this->targetDirs[3].'/Fixture/Class44.php';
        include_once $this->targetDirs[3].'/Fixture/Class45.php';
        include_once $this->targetDirs[3].'/Fixture/Class46.php';
        include_once $this->targetDirs[3].'/Fixture/Class47.php';
        include_once $this->targetDirs[3].'/Fixture/Class48.php';
        include_once $this->targetDirs[3].'/Fixture/Class49.php';
        include_once $this->targetDirs[3].'/Fixture/Class50.php';
        include_once $this->targetDirs[3].'/Fixture/Class51.php';
        include_once $this->targetDirs[3].'/Fixture/Class52.php';
        include_once $this->targetDirs[3].'/Fixture/Class53.php';
        include_once $this->targetDirs[3].'/Fixture/Class54.php';
        include_once $this->targetDirs[3].'/Fixture/Class55.php';
        include_once $this->targetDirs[3].'/Fixture/Class56.php';
        include_once $this->targetDirs[3].'/Fixture/Class57.php';
        include_once $this->targetDirs[3].'/Fixture/Class58.php';
        include_once $this->targetDirs[3].'/Fixture/Class59.php';
        include_once $this->targetDirs[3].'/Fixture/Class60.php';
        include_once $this->targetDirs[3].'/Fixture/Class61.php';
        include_once $this->targetDirs[3].'/Fixture/Class62.php';
        include_once $this->targetDirs[3].'/Fixture/Class63.php';
        include_once $this->targetDirs[3].'/Fixture/Class64.php';
        include_once $this->targetDirs[3].'/Fixture/Class65.php';
        include_once $this->targetDirs[3].'/Fixture/Class66.php';
        include_once $this->targetDirs[3].'/Fixture/Class67.php';
        include_once $this->targetDirs[3].'/Fixture/Class68.php';
        include_once $this->targetDirs[3].'/Fixture/Class69.php';
        include_once $this->targetDirs[3].'/Fixture/Class70.php';
        include_once $this->targetDirs[3].'/Fixture/Class71.php';
        include_once $this->targetDirs[3].'/Fixture/Class72.php';
        include_once $this->targetDirs[3].'/Fixture/Class73.php';
        include_once $this->targetDirs[3].'/Fixture/Class74.php';
        include_once $this->targetDirs[3].'/Fixture/Class75.php';
        include_once $this->targetDirs[3].'/Fixture/Class76.php';
        include_once $this->targetDirs[3].'/Fixture/Class77.php';
        include_once $this->targetDirs[3].'/Fixture/Class78.php';
        include_once $this->targetDirs[3].'/Fixture/Class79.php';
        include_once $this->targetDirs[3].'/Fixture/Class80.php';
        include_once $this->targetDirs[3].'/Fixture/Class81.php';
        include_once $this->targetDirs[3].'/Fixture/Class82.php';
        include_once $this->targetDirs[3].'/Fixture/Class83.php';
        include_once $this->targetDirs[3].'/Fixture/Class84.php';
        include_once $this->targetDirs[3].'/Fixture/Class85.php';
        include_once $this->targetDirs[3].'/Fixture/Class86.php';
        include_once $this->targetDirs[3].'/Fixture/Class87.php';
        include_once $this->targetDirs[3].'/Fixture/Class88.php';
        include_once $this->targetDirs[3].'/Fixture/Class89.php';
        include_once $this->targetDirs[3].'/Fixture/Class90.php';
        include_once $this->targetDirs[3].'/Fixture/Class91.php';
        include_once $this->targetDirs[3].'/Fixture/Class92.php';
        include_once $this->targetDirs[3].'/Fixture/Class93.php';
        include_once $this->targetDirs[3].'/Fixture/Class94.php';
        include_once $this->targetDirs[3].'/Fixture/Class95.php';
        include_once $this->targetDirs[3].'/Fixture/Class96.php';
        include_once $this->targetDirs[3].'/Fixture/Class97.php';
        include_once $this->targetDirs[3].'/Fixture/Class98.php';
        include_once $this->targetDirs[3].'/Fixture/Class99.php';
        include_once $this->targetDirs[3].'/Fixture/Class100.php';

        return new \DiContainerBenchmarks\Fixture\Class100(new \DiContainerBenchmarks\Fixture\Class99(new \DiContainerBenchmarks\Fixture\Class98(new \DiContainerBenchmarks\Fixture\Class97(new \DiContainerBenchmarks\Fixture\Class96(new \DiContainerBenchmarks\Fixture\Class95(new \DiContainerBenchmarks\Fixture\Class94(new \DiContainerBenchmarks\Fixture\Class93(new \DiContainerBenchmarks\Fixture\Class92(new \DiContainerBenchmarks\Fixture\Class91(new \DiContainerBenchmarks\Fixture\Class90(new \DiContainerBenchmarks\Fixture\Class89(new \DiContainerBenchmarks\Fixture\Class88(new \DiContainerBenchmarks\Fixture\Class87(new \DiContainerBenchmarks\Fixture\Class86(new \DiContainerBenchmarks\Fixture\Class85(new \DiContainerBenchmarks\Fixture\Class84(new \DiContainerBenchmarks\Fixture\Class83(new \DiContainerBenchmarks\Fixture\Class82(new \DiContainerBenchmarks\Fixture\Class81(new \DiContainerBenchmarks\Fixture\Class80(new \DiContainerBenchmarks\Fixture\Class79(new \DiContainerBenchmarks\Fixture\Class78(new \DiContainerBenchmarks\Fixture\Class77(new \DiContainerBenchmarks\Fixture\Class76(new \DiContainerBenchmarks\Fixture\Class75(new \DiContainerBenchmarks\Fixture\Class74(new \DiContainerBenchmarks\Fixture\Class73(new \DiContainerBenchmarks\Fixture\Class72(new \DiContainerBenchmarks\Fixture\Class71(new \DiContainerBenchmarks\Fixture\Class70(new \DiContainerBenchmarks\Fixture\Class69(new \DiContainerBenchmarks\Fixture\Class68(new \DiContainerBenchmarks\Fixture\Class67(new \DiContainerBenchmarks\Fixture\Class66(new \DiContainerBenchmarks\Fixture\Class65(new \DiContainerBenchmarks\Fixture\Class64(new \DiContainerBenchmarks\Fixture\Class63(new \DiContainerBenchmarks\Fixture\Class62(new \DiContainerBenchmarks\Fixture\Class61(new \DiContainerBenchmarks\Fixture\Class60(new \DiContainerBenchmarks\Fixture\Class59(new \DiContainerBenchmarks\Fixture\Class58(new \DiContainerBenchmarks\Fixture\Class57(new \DiContainerBenchmarks\Fixture\Class56(new \DiContainerBenchmarks\Fixture\Class55(new \DiContainerBenchmarks\Fixture\Class54(new \DiContainerBenchmarks\Fixture\Class53(new \DiContainerBenchmarks\Fixture\Class52(new \DiContainerBenchmarks\Fixture\Class51(new \DiContainerBenchmarks\Fixture\Class50(new \DiContainerBenchmarks\Fixture\Class49(new \DiContainerBenchmarks\Fixture\Class48(new \DiContainerBenchmarks\Fixture\Class47(new \DiContainerBenchmarks\Fixture\Class46(new \DiContainerBenchmarks\Fixture\Class45(new \DiContainerBenchmarks\Fixture\Class44(new \DiContainerBenchmarks\Fixture\Class43(new \DiContainerBenchmarks\Fixture\Class42(new \DiContainerBenchmarks\Fixture\Class41(new \DiContainerBenchmarks\Fixture\Class40(new \DiContainerBenchmarks\Fixture\Class39(new \DiContainerBenchmarks\Fixture\Class38(new \DiContainerBenchmarks\Fixture\Class37(new \DiContainerBenchmarks\Fixture\Class36(new \DiContainerBenchmarks\Fixture\Class35(new \DiContainerBenchmarks\Fixture\Class34(new \DiContainerBenchmarks\Fixture\Class33(new \DiContainerBenchmarks\Fixture\Class32(new \DiContainerBenchmarks\Fixture\Class31(new \DiContainerBenchmarks\Fixture\Class30(new \DiContainerBenchmarks\Fixture\Class29(new \DiContainerBenchmarks\Fixture\Class28(new \DiContainerBenchmarks\Fixture\Class27(new \DiContainerBenchmarks\Fixture\Class26(new \DiContainerBenchmarks\Fixture\Class25(new \DiContainerBenchmarks\Fixture\Class24(new \DiContainerBenchmarks\Fixture\Class23(new \DiContainerBenchmarks\Fixture\Class22(new \DiContainerBenchmarks\Fixture\Class21(new \DiContainerBenchmarks\Fixture\Class20(new \DiContainerBenchmarks\Fixture\Class19(new \DiContainerBenchmarks\Fixture\Class18(new \DiContainerBenchmarks\Fixture\Class17(new \DiContainerBenchmarks\Fixture\Class16(new \DiContainerBenchmarks\Fixture\Class15(new \DiContainerBenchmarks\Fixture\Class14(new \DiContainerBenchmarks\Fixture\Class13(new \DiContainerBenchmarks\Fixture\Class12(new \DiContainerBenchmarks\Fixture\Class11(new \DiContainerBenchmarks\Fixture\Class10(new \DiContainerBenchmarks\Fixture\Class9(new \DiContainerBenchmarks\Fixture\Class8(new \DiContainerBenchmarks\Fixture\Class7(new \DiContainerBenchmarks\Fixture\Class6(new \DiContainerBenchmarks\Fixture\Class5(new \DiContainerBenchmarks\Fixture\Class4(new \DiContainerBenchmarks\Fixture\Class3(new \DiContainerBenchmarks\Fixture\Class2(new \DiContainerBenchmarks\Fixture\Class1())))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'container.dumper.inline_class_loader' => true,
        );
    }
}
