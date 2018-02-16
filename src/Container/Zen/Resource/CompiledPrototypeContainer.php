<?php
namespace DiContainerBenchmarks\Container\Zen\Resource;

use WoohooLabs\Zen\AbstractCompiledContainer;

class CompiledPrototypeContainer extends AbstractCompiledContainer
{
    /**
     * @var string[]
     */
    protected static $entryPoints = [
        \DiContainerBenchmarks\Container\Zen\Resource\CompiledPrototypeContainer::class => 'DiContainerBenchmarks__Container__Zen__Resource__CompiledPrototypeContainer',
        \Psr\Container\ContainerInterface::class => 'Psr__Container__ContainerInterface',
        \DiContainerBenchmarks\Fixture\Class10::class => 'DiContainerBenchmarks__Fixture__Class10',
        \DiContainerBenchmarks\Fixture\Class100::class => 'DiContainerBenchmarks__Fixture__Class100',
    ];

    /**
     * @var string
     */
    protected $rootDirectory;

    public function __construct(string $rootDirectory = '')
    {
        $this->rootDirectory = $rootDirectory;
    }

    public function DiContainerBenchmarks__Container__Zen__Resource__CompiledPrototypeContainer()
    {
        return $this;
    }

    public function Psr__Container__ContainerInterface()
    {
        return $this->singletonEntries['Psr\Container\ContainerInterface'] = $this->DiContainerBenchmarks__Container__Zen__Resource__CompiledPrototypeContainer();
    }

    public function DiContainerBenchmarks__Fixture__Class10()
    {
        return new \DiContainerBenchmarks\Fixture\Class10(
            $this->DiContainerBenchmarks__Fixture__Class9()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class9()
    {
        return new \DiContainerBenchmarks\Fixture\Class9(
            $this->DiContainerBenchmarks__Fixture__Class8()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class8()
    {
        return new \DiContainerBenchmarks\Fixture\Class8(
            $this->DiContainerBenchmarks__Fixture__Class7()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class7()
    {
        return new \DiContainerBenchmarks\Fixture\Class7(
            $this->DiContainerBenchmarks__Fixture__Class6()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class6()
    {
        return new \DiContainerBenchmarks\Fixture\Class6(
            $this->DiContainerBenchmarks__Fixture__Class5()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class5()
    {
        return new \DiContainerBenchmarks\Fixture\Class5(
            $this->DiContainerBenchmarks__Fixture__Class4()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class4()
    {
        return new \DiContainerBenchmarks\Fixture\Class4(
            $this->DiContainerBenchmarks__Fixture__Class3()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class3()
    {
        return new \DiContainerBenchmarks\Fixture\Class3(
            $this->DiContainerBenchmarks__Fixture__Class2()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class2()
    {
        return new \DiContainerBenchmarks\Fixture\Class2(
            $this->DiContainerBenchmarks__Fixture__Class1()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class1()
    {
        return new \DiContainerBenchmarks\Fixture\Class1();
    }

    public function DiContainerBenchmarks__Fixture__Class100()
    {
        return new \DiContainerBenchmarks\Fixture\Class100(
            $this->DiContainerBenchmarks__Fixture__Class99()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class99()
    {
        return new \DiContainerBenchmarks\Fixture\Class99(
            $this->DiContainerBenchmarks__Fixture__Class98()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class98()
    {
        return new \DiContainerBenchmarks\Fixture\Class98(
            $this->DiContainerBenchmarks__Fixture__Class97()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class97()
    {
        return new \DiContainerBenchmarks\Fixture\Class97(
            $this->DiContainerBenchmarks__Fixture__Class96()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class96()
    {
        return new \DiContainerBenchmarks\Fixture\Class96(
            $this->DiContainerBenchmarks__Fixture__Class95()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class95()
    {
        return new \DiContainerBenchmarks\Fixture\Class95(
            $this->DiContainerBenchmarks__Fixture__Class94()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class94()
    {
        return new \DiContainerBenchmarks\Fixture\Class94(
            $this->DiContainerBenchmarks__Fixture__Class93()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class93()
    {
        return new \DiContainerBenchmarks\Fixture\Class93(
            $this->DiContainerBenchmarks__Fixture__Class92()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class92()
    {
        return new \DiContainerBenchmarks\Fixture\Class92(
            $this->DiContainerBenchmarks__Fixture__Class91()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class91()
    {
        return new \DiContainerBenchmarks\Fixture\Class91(
            $this->DiContainerBenchmarks__Fixture__Class90()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class90()
    {
        return new \DiContainerBenchmarks\Fixture\Class90(
            $this->DiContainerBenchmarks__Fixture__Class89()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class89()
    {
        return new \DiContainerBenchmarks\Fixture\Class89(
            $this->DiContainerBenchmarks__Fixture__Class88()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class88()
    {
        return new \DiContainerBenchmarks\Fixture\Class88(
            $this->DiContainerBenchmarks__Fixture__Class87()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class87()
    {
        return new \DiContainerBenchmarks\Fixture\Class87(
            $this->DiContainerBenchmarks__Fixture__Class86()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class86()
    {
        return new \DiContainerBenchmarks\Fixture\Class86(
            $this->DiContainerBenchmarks__Fixture__Class85()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class85()
    {
        return new \DiContainerBenchmarks\Fixture\Class85(
            $this->DiContainerBenchmarks__Fixture__Class84()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class84()
    {
        return new \DiContainerBenchmarks\Fixture\Class84(
            $this->DiContainerBenchmarks__Fixture__Class83()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class83()
    {
        return new \DiContainerBenchmarks\Fixture\Class83(
            $this->DiContainerBenchmarks__Fixture__Class82()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class82()
    {
        return new \DiContainerBenchmarks\Fixture\Class82(
            $this->DiContainerBenchmarks__Fixture__Class81()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class81()
    {
        return new \DiContainerBenchmarks\Fixture\Class81(
            $this->DiContainerBenchmarks__Fixture__Class80()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class80()
    {
        return new \DiContainerBenchmarks\Fixture\Class80(
            $this->DiContainerBenchmarks__Fixture__Class79()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class79()
    {
        return new \DiContainerBenchmarks\Fixture\Class79(
            $this->DiContainerBenchmarks__Fixture__Class78()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class78()
    {
        return new \DiContainerBenchmarks\Fixture\Class78(
            $this->DiContainerBenchmarks__Fixture__Class77()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class77()
    {
        return new \DiContainerBenchmarks\Fixture\Class77(
            $this->DiContainerBenchmarks__Fixture__Class76()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class76()
    {
        return new \DiContainerBenchmarks\Fixture\Class76(
            $this->DiContainerBenchmarks__Fixture__Class75()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class75()
    {
        return new \DiContainerBenchmarks\Fixture\Class75(
            $this->DiContainerBenchmarks__Fixture__Class74()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class74()
    {
        return new \DiContainerBenchmarks\Fixture\Class74(
            $this->DiContainerBenchmarks__Fixture__Class73()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class73()
    {
        return new \DiContainerBenchmarks\Fixture\Class73(
            $this->DiContainerBenchmarks__Fixture__Class72()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class72()
    {
        return new \DiContainerBenchmarks\Fixture\Class72(
            $this->DiContainerBenchmarks__Fixture__Class71()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class71()
    {
        return new \DiContainerBenchmarks\Fixture\Class71(
            $this->DiContainerBenchmarks__Fixture__Class70()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class70()
    {
        return new \DiContainerBenchmarks\Fixture\Class70(
            $this->DiContainerBenchmarks__Fixture__Class69()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class69()
    {
        return new \DiContainerBenchmarks\Fixture\Class69(
            $this->DiContainerBenchmarks__Fixture__Class68()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class68()
    {
        return new \DiContainerBenchmarks\Fixture\Class68(
            $this->DiContainerBenchmarks__Fixture__Class67()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class67()
    {
        return new \DiContainerBenchmarks\Fixture\Class67(
            $this->DiContainerBenchmarks__Fixture__Class66()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class66()
    {
        return new \DiContainerBenchmarks\Fixture\Class66(
            $this->DiContainerBenchmarks__Fixture__Class65()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class65()
    {
        return new \DiContainerBenchmarks\Fixture\Class65(
            $this->DiContainerBenchmarks__Fixture__Class64()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class64()
    {
        return new \DiContainerBenchmarks\Fixture\Class64(
            $this->DiContainerBenchmarks__Fixture__Class63()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class63()
    {
        return new \DiContainerBenchmarks\Fixture\Class63(
            $this->DiContainerBenchmarks__Fixture__Class62()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class62()
    {
        return new \DiContainerBenchmarks\Fixture\Class62(
            $this->DiContainerBenchmarks__Fixture__Class61()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class61()
    {
        return new \DiContainerBenchmarks\Fixture\Class61(
            $this->DiContainerBenchmarks__Fixture__Class60()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class60()
    {
        return new \DiContainerBenchmarks\Fixture\Class60(
            $this->DiContainerBenchmarks__Fixture__Class59()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class59()
    {
        return new \DiContainerBenchmarks\Fixture\Class59(
            $this->DiContainerBenchmarks__Fixture__Class58()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class58()
    {
        return new \DiContainerBenchmarks\Fixture\Class58(
            $this->DiContainerBenchmarks__Fixture__Class57()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class57()
    {
        return new \DiContainerBenchmarks\Fixture\Class57(
            $this->DiContainerBenchmarks__Fixture__Class56()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class56()
    {
        return new \DiContainerBenchmarks\Fixture\Class56(
            $this->DiContainerBenchmarks__Fixture__Class55()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class55()
    {
        return new \DiContainerBenchmarks\Fixture\Class55(
            $this->DiContainerBenchmarks__Fixture__Class54()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class54()
    {
        return new \DiContainerBenchmarks\Fixture\Class54(
            $this->DiContainerBenchmarks__Fixture__Class53()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class53()
    {
        return new \DiContainerBenchmarks\Fixture\Class53(
            $this->DiContainerBenchmarks__Fixture__Class52()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class52()
    {
        return new \DiContainerBenchmarks\Fixture\Class52(
            $this->DiContainerBenchmarks__Fixture__Class51()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class51()
    {
        return new \DiContainerBenchmarks\Fixture\Class51(
            $this->DiContainerBenchmarks__Fixture__Class50()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class50()
    {
        return new \DiContainerBenchmarks\Fixture\Class50(
            $this->DiContainerBenchmarks__Fixture__Class49()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class49()
    {
        return new \DiContainerBenchmarks\Fixture\Class49(
            $this->DiContainerBenchmarks__Fixture__Class48()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class48()
    {
        return new \DiContainerBenchmarks\Fixture\Class48(
            $this->DiContainerBenchmarks__Fixture__Class47()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class47()
    {
        return new \DiContainerBenchmarks\Fixture\Class47(
            $this->DiContainerBenchmarks__Fixture__Class46()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class46()
    {
        return new \DiContainerBenchmarks\Fixture\Class46(
            $this->DiContainerBenchmarks__Fixture__Class45()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class45()
    {
        return new \DiContainerBenchmarks\Fixture\Class45(
            $this->DiContainerBenchmarks__Fixture__Class44()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class44()
    {
        return new \DiContainerBenchmarks\Fixture\Class44(
            $this->DiContainerBenchmarks__Fixture__Class43()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class43()
    {
        return new \DiContainerBenchmarks\Fixture\Class43(
            $this->DiContainerBenchmarks__Fixture__Class42()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class42()
    {
        return new \DiContainerBenchmarks\Fixture\Class42(
            $this->DiContainerBenchmarks__Fixture__Class41()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class41()
    {
        return new \DiContainerBenchmarks\Fixture\Class41(
            $this->DiContainerBenchmarks__Fixture__Class40()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class40()
    {
        return new \DiContainerBenchmarks\Fixture\Class40(
            $this->DiContainerBenchmarks__Fixture__Class39()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class39()
    {
        return new \DiContainerBenchmarks\Fixture\Class39(
            $this->DiContainerBenchmarks__Fixture__Class38()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class38()
    {
        return new \DiContainerBenchmarks\Fixture\Class38(
            $this->DiContainerBenchmarks__Fixture__Class37()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class37()
    {
        return new \DiContainerBenchmarks\Fixture\Class37(
            $this->DiContainerBenchmarks__Fixture__Class36()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class36()
    {
        return new \DiContainerBenchmarks\Fixture\Class36(
            $this->DiContainerBenchmarks__Fixture__Class35()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class35()
    {
        return new \DiContainerBenchmarks\Fixture\Class35(
            $this->DiContainerBenchmarks__Fixture__Class34()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class34()
    {
        return new \DiContainerBenchmarks\Fixture\Class34(
            $this->DiContainerBenchmarks__Fixture__Class33()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class33()
    {
        return new \DiContainerBenchmarks\Fixture\Class33(
            $this->DiContainerBenchmarks__Fixture__Class32()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class32()
    {
        return new \DiContainerBenchmarks\Fixture\Class32(
            $this->DiContainerBenchmarks__Fixture__Class31()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class31()
    {
        return new \DiContainerBenchmarks\Fixture\Class31(
            $this->DiContainerBenchmarks__Fixture__Class30()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class30()
    {
        return new \DiContainerBenchmarks\Fixture\Class30(
            $this->DiContainerBenchmarks__Fixture__Class29()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class29()
    {
        return new \DiContainerBenchmarks\Fixture\Class29(
            $this->DiContainerBenchmarks__Fixture__Class28()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class28()
    {
        return new \DiContainerBenchmarks\Fixture\Class28(
            $this->DiContainerBenchmarks__Fixture__Class27()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class27()
    {
        return new \DiContainerBenchmarks\Fixture\Class27(
            $this->DiContainerBenchmarks__Fixture__Class26()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class26()
    {
        return new \DiContainerBenchmarks\Fixture\Class26(
            $this->DiContainerBenchmarks__Fixture__Class25()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class25()
    {
        return new \DiContainerBenchmarks\Fixture\Class25(
            $this->DiContainerBenchmarks__Fixture__Class24()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class24()
    {
        return new \DiContainerBenchmarks\Fixture\Class24(
            $this->DiContainerBenchmarks__Fixture__Class23()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class23()
    {
        return new \DiContainerBenchmarks\Fixture\Class23(
            $this->DiContainerBenchmarks__Fixture__Class22()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class22()
    {
        return new \DiContainerBenchmarks\Fixture\Class22(
            $this->DiContainerBenchmarks__Fixture__Class21()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class21()
    {
        return new \DiContainerBenchmarks\Fixture\Class21(
            $this->DiContainerBenchmarks__Fixture__Class20()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class20()
    {
        return new \DiContainerBenchmarks\Fixture\Class20(
            $this->DiContainerBenchmarks__Fixture__Class19()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class19()
    {
        return new \DiContainerBenchmarks\Fixture\Class19(
            $this->DiContainerBenchmarks__Fixture__Class18()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class18()
    {
        return new \DiContainerBenchmarks\Fixture\Class18(
            $this->DiContainerBenchmarks__Fixture__Class17()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class17()
    {
        return new \DiContainerBenchmarks\Fixture\Class17(
            $this->DiContainerBenchmarks__Fixture__Class16()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class16()
    {
        return new \DiContainerBenchmarks\Fixture\Class16(
            $this->DiContainerBenchmarks__Fixture__Class15()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class15()
    {
        return new \DiContainerBenchmarks\Fixture\Class15(
            $this->DiContainerBenchmarks__Fixture__Class14()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class14()
    {
        return new \DiContainerBenchmarks\Fixture\Class14(
            $this->DiContainerBenchmarks__Fixture__Class13()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class13()
    {
        return new \DiContainerBenchmarks\Fixture\Class13(
            $this->DiContainerBenchmarks__Fixture__Class12()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class12()
    {
        return new \DiContainerBenchmarks\Fixture\Class12(
            $this->DiContainerBenchmarks__Fixture__Class11()
        );
    }

    public function DiContainerBenchmarks__Fixture__Class11()
    {
        return new \DiContainerBenchmarks\Fixture\Class11(
            $this->DiContainerBenchmarks__Fixture__Class10()
        );
    }
}
