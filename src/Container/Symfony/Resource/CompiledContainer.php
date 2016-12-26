<?php
namespace DiContainerBenchmarks\Container\Symfony\Resource;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * CompiledContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class CompiledContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->services = array();
        $this->methodMap = array(
            'dicontainerbenchmarks\\fixture\\constructor\\class1' => 'getDicontainerbenchmarks_Fixture_Constructor_Class1Service',
            'dicontainerbenchmarks\\fixture\\constructor\\class10' => 'getDicontainerbenchmarks_Fixture_Constructor_Class10Service',
            'dicontainerbenchmarks\\fixture\\constructor\\class50' => 'getDicontainerbenchmarks_Fixture_Constructor_Class50Service',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'dicontainerbenchmarks\fixture\constructor\class1' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Constructor\Class1 A DiContainerBenchmarks\Fixture\Constructor\Class1 instance
     */
    protected function getDicontainerbenchmarks_Fixture_Constructor_Class1Service()
    {
        return $this->services['dicontainerbenchmarks\fixture\constructor\class1'] = new \DiContainerBenchmarks\Fixture\Constructor\Class1();
    }

    /**
     * Gets the 'dicontainerbenchmarks\fixture\constructor\class10' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Constructor\Class10 A DiContainerBenchmarks\Fixture\Constructor\Class10 instance
     */
    protected function getDicontainerbenchmarks_Fixture_Constructor_Class10Service()
    {
        return $this->services['dicontainerbenchmarks\fixture\constructor\class10'] = new \DiContainerBenchmarks\Fixture\Constructor\Class10(new \DiContainerBenchmarks\Fixture\Constructor\Class9(new \DiContainerBenchmarks\Fixture\Constructor\Class8(new \DiContainerBenchmarks\Fixture\Constructor\Class7(new \DiContainerBenchmarks\Fixture\Constructor\Class6(new \DiContainerBenchmarks\Fixture\Constructor\Class5(new \DiContainerBenchmarks\Fixture\Constructor\Class4(new \DiContainerBenchmarks\Fixture\Constructor\Class3(new \DiContainerBenchmarks\Fixture\Constructor\Class2($this->get('dicontainerbenchmarks\fixture\constructor\class1'))))))))));
    }

    /**
     * Gets the 'dicontainerbenchmarks\fixture\constructor\class50' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Constructor\Class50 A DiContainerBenchmarks\Fixture\Constructor\Class50 instance
     */
    protected function getDicontainerbenchmarks_Fixture_Constructor_Class50Service()
    {
        return $this->services['dicontainerbenchmarks\fixture\constructor\class50'] = new \DiContainerBenchmarks\Fixture\Constructor\Class50(new \DiContainerBenchmarks\Fixture\Constructor\Class49(new \DiContainerBenchmarks\Fixture\Constructor\Class48(new \DiContainerBenchmarks\Fixture\Constructor\Class47(new \DiContainerBenchmarks\Fixture\Constructor\Class46(new \DiContainerBenchmarks\Fixture\Constructor\Class45(new \DiContainerBenchmarks\Fixture\Constructor\Class44(new \DiContainerBenchmarks\Fixture\Constructor\Class43(new \DiContainerBenchmarks\Fixture\Constructor\Class42(new \DiContainerBenchmarks\Fixture\Constructor\Class41(new \DiContainerBenchmarks\Fixture\Constructor\Class40(new \DiContainerBenchmarks\Fixture\Constructor\Class39(new \DiContainerBenchmarks\Fixture\Constructor\Class38(new \DiContainerBenchmarks\Fixture\Constructor\Class37(new \DiContainerBenchmarks\Fixture\Constructor\Class36(new \DiContainerBenchmarks\Fixture\Constructor\Class35(new \DiContainerBenchmarks\Fixture\Constructor\Class34(new \DiContainerBenchmarks\Fixture\Constructor\Class33(new \DiContainerBenchmarks\Fixture\Constructor\Class32(new \DiContainerBenchmarks\Fixture\Constructor\Class31(new \DiContainerBenchmarks\Fixture\Constructor\Class30(new \DiContainerBenchmarks\Fixture\Constructor\Class29(new \DiContainerBenchmarks\Fixture\Constructor\Class28(new \DiContainerBenchmarks\Fixture\Constructor\Class27(new \DiContainerBenchmarks\Fixture\Constructor\Class26(new \DiContainerBenchmarks\Fixture\Constructor\Class25(new \DiContainerBenchmarks\Fixture\Constructor\Class24(new \DiContainerBenchmarks\Fixture\Constructor\Class23(new \DiContainerBenchmarks\Fixture\Constructor\Class22(new \DiContainerBenchmarks\Fixture\Constructor\Class21(new \DiContainerBenchmarks\Fixture\Constructor\Class20(new \DiContainerBenchmarks\Fixture\Constructor\Class19(new \DiContainerBenchmarks\Fixture\Constructor\Class18(new \DiContainerBenchmarks\Fixture\Constructor\Class17(new \DiContainerBenchmarks\Fixture\Constructor\Class16(new \DiContainerBenchmarks\Fixture\Constructor\Class15(new \DiContainerBenchmarks\Fixture\Constructor\Class14(new \DiContainerBenchmarks\Fixture\Constructor\Class13(new \DiContainerBenchmarks\Fixture\Constructor\Class12(new \DiContainerBenchmarks\Fixture\Constructor\Class11($this->get('dicontainerbenchmarks\fixture\constructor\class10')))))))))))))))))))))))))))))))))))))))));
    }
}
