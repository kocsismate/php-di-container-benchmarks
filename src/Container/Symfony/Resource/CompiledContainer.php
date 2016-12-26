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
            'dicontainerbenchmarks\\fixture\\constructor\\class100' => 'getDicontainerbenchmarks_Fixture_Constructor_Class100Service',
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
     * Gets the 'dicontainerbenchmarks\fixture\constructor\class100' service.
     *
     * This service is autowired.
     *
     * @return \DiContainerBenchmarks\Fixture\Constructor\Class100 A DiContainerBenchmarks\Fixture\Constructor\Class100 instance
     */
    protected function getDicontainerbenchmarks_Fixture_Constructor_Class100Service()
    {
        return $this->services['dicontainerbenchmarks\fixture\constructor\class100'] = new \DiContainerBenchmarks\Fixture\Constructor\Class100(new \DiContainerBenchmarks\Fixture\Constructor\Class99(new \DiContainerBenchmarks\Fixture\Constructor\Class98(new \DiContainerBenchmarks\Fixture\Constructor\Class97(new \DiContainerBenchmarks\Fixture\Constructor\Class96(new \DiContainerBenchmarks\Fixture\Constructor\Class95(new \DiContainerBenchmarks\Fixture\Constructor\Class94(new \DiContainerBenchmarks\Fixture\Constructor\Class93(new \DiContainerBenchmarks\Fixture\Constructor\Class92(new \DiContainerBenchmarks\Fixture\Constructor\Class91(new \DiContainerBenchmarks\Fixture\Constructor\Class90(new \DiContainerBenchmarks\Fixture\Constructor\Class89(new \DiContainerBenchmarks\Fixture\Constructor\Class88(new \DiContainerBenchmarks\Fixture\Constructor\Class87(new \DiContainerBenchmarks\Fixture\Constructor\Class86(new \DiContainerBenchmarks\Fixture\Constructor\Class85(new \DiContainerBenchmarks\Fixture\Constructor\Class84(new \DiContainerBenchmarks\Fixture\Constructor\Class83(new \DiContainerBenchmarks\Fixture\Constructor\Class82(new \DiContainerBenchmarks\Fixture\Constructor\Class81(new \DiContainerBenchmarks\Fixture\Constructor\Class80(new \DiContainerBenchmarks\Fixture\Constructor\Class79(new \DiContainerBenchmarks\Fixture\Constructor\Class78(new \DiContainerBenchmarks\Fixture\Constructor\Class77(new \DiContainerBenchmarks\Fixture\Constructor\Class76(new \DiContainerBenchmarks\Fixture\Constructor\Class75(new \DiContainerBenchmarks\Fixture\Constructor\Class74(new \DiContainerBenchmarks\Fixture\Constructor\Class73(new \DiContainerBenchmarks\Fixture\Constructor\Class72(new \DiContainerBenchmarks\Fixture\Constructor\Class71(new \DiContainerBenchmarks\Fixture\Constructor\Class70(new \DiContainerBenchmarks\Fixture\Constructor\Class69(new \DiContainerBenchmarks\Fixture\Constructor\Class68(new \DiContainerBenchmarks\Fixture\Constructor\Class67(new \DiContainerBenchmarks\Fixture\Constructor\Class66(new \DiContainerBenchmarks\Fixture\Constructor\Class65(new \DiContainerBenchmarks\Fixture\Constructor\Class64(new \DiContainerBenchmarks\Fixture\Constructor\Class63(new \DiContainerBenchmarks\Fixture\Constructor\Class62(new \DiContainerBenchmarks\Fixture\Constructor\Class61(new \DiContainerBenchmarks\Fixture\Constructor\Class60(new \DiContainerBenchmarks\Fixture\Constructor\Class59(new \DiContainerBenchmarks\Fixture\Constructor\Class58(new \DiContainerBenchmarks\Fixture\Constructor\Class57(new \DiContainerBenchmarks\Fixture\Constructor\Class56(new \DiContainerBenchmarks\Fixture\Constructor\Class55(new \DiContainerBenchmarks\Fixture\Constructor\Class54(new \DiContainerBenchmarks\Fixture\Constructor\Class53(new \DiContainerBenchmarks\Fixture\Constructor\Class52(new \DiContainerBenchmarks\Fixture\Constructor\Class51(new \DiContainerBenchmarks\Fixture\Constructor\Class50(new \DiContainerBenchmarks\Fixture\Constructor\Class49(new \DiContainerBenchmarks\Fixture\Constructor\Class48(new \DiContainerBenchmarks\Fixture\Constructor\Class47(new \DiContainerBenchmarks\Fixture\Constructor\Class46(new \DiContainerBenchmarks\Fixture\Constructor\Class45(new \DiContainerBenchmarks\Fixture\Constructor\Class44(new \DiContainerBenchmarks\Fixture\Constructor\Class43(new \DiContainerBenchmarks\Fixture\Constructor\Class42(new \DiContainerBenchmarks\Fixture\Constructor\Class41(new \DiContainerBenchmarks\Fixture\Constructor\Class40(new \DiContainerBenchmarks\Fixture\Constructor\Class39(new \DiContainerBenchmarks\Fixture\Constructor\Class38(new \DiContainerBenchmarks\Fixture\Constructor\Class37(new \DiContainerBenchmarks\Fixture\Constructor\Class36(new \DiContainerBenchmarks\Fixture\Constructor\Class35(new \DiContainerBenchmarks\Fixture\Constructor\Class34(new \DiContainerBenchmarks\Fixture\Constructor\Class33(new \DiContainerBenchmarks\Fixture\Constructor\Class32(new \DiContainerBenchmarks\Fixture\Constructor\Class31(new \DiContainerBenchmarks\Fixture\Constructor\Class30(new \DiContainerBenchmarks\Fixture\Constructor\Class29(new \DiContainerBenchmarks\Fixture\Constructor\Class28(new \DiContainerBenchmarks\Fixture\Constructor\Class27(new \DiContainerBenchmarks\Fixture\Constructor\Class26(new \DiContainerBenchmarks\Fixture\Constructor\Class25(new \DiContainerBenchmarks\Fixture\Constructor\Class24(new \DiContainerBenchmarks\Fixture\Constructor\Class23(new \DiContainerBenchmarks\Fixture\Constructor\Class22(new \DiContainerBenchmarks\Fixture\Constructor\Class21(new \DiContainerBenchmarks\Fixture\Constructor\Class20(new \DiContainerBenchmarks\Fixture\Constructor\Class19(new \DiContainerBenchmarks\Fixture\Constructor\Class18(new \DiContainerBenchmarks\Fixture\Constructor\Class17(new \DiContainerBenchmarks\Fixture\Constructor\Class16(new \DiContainerBenchmarks\Fixture\Constructor\Class15(new \DiContainerBenchmarks\Fixture\Constructor\Class14(new \DiContainerBenchmarks\Fixture\Constructor\Class13(new \DiContainerBenchmarks\Fixture\Constructor\Class12(new \DiContainerBenchmarks\Fixture\Constructor\Class11($this->get('dicontainerbenchmarks\fixture\constructor\class10')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))));
    }
}
