<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen\Resource;

use WoohooLabs\Zen\AbstractCompiledContainer;

class CompiledSingletonContainer extends AbstractCompiledContainer
{
    protected static array $entryPoints = [
        'Psr\Container\ContainerInterface' => 'Psr__Container__ContainerInterface',
        'DiContainerBenchmarks\Container\Zen\Resource\CompiledSingletonContainer' => 'DiContainerBenchmarks__Container__Zen__Resource__CompiledSingletonContainer',
        'DiContainerBenchmarks\Fixture\Class10' => 'DiContainerBenchmarks__Fixture__Class10',
        'DiContainerBenchmarks\Fixture\Class100' => 'DiContainerBenchmarks__Fixture__Class100',
    ];
    protected string $rootDirectory;

    public function __construct(string $rootDirectory = "")
    {
        $this->rootDirectory = $rootDirectory;
    }

    public function Psr__Container__ContainerInterface()
    {
        return $this->singletonEntries['Psr\Container\ContainerInterface'] = $this;
    }

    public function DiContainerBenchmarks__Container__Zen__Resource__CompiledSingletonContainer()
    {
        return $this;
    }

    public function DiContainerBenchmarks__Fixture__Class10()
    {
        return $this->singletonEntries['DiContainerBenchmarks\Fixture\Class10'] = new \DiContainerBenchmarks\Fixture\Class10(
            new \DiContainerBenchmarks\Fixture\Class9(
                new \DiContainerBenchmarks\Fixture\Class8(
                    new \DiContainerBenchmarks\Fixture\Class7(
                        new \DiContainerBenchmarks\Fixture\Class6(
                            new \DiContainerBenchmarks\Fixture\Class5(
                                new \DiContainerBenchmarks\Fixture\Class4(
                                    new \DiContainerBenchmarks\Fixture\Class3(
                                        new \DiContainerBenchmarks\Fixture\Class2(
                                            new \DiContainerBenchmarks\Fixture\Class1()
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        );
    }

    public function DiContainerBenchmarks__Fixture__Class100()
    {
        return $this->singletonEntries['DiContainerBenchmarks\Fixture\Class100'] = new \DiContainerBenchmarks\Fixture\Class100(
            new \DiContainerBenchmarks\Fixture\Class99(
                new \DiContainerBenchmarks\Fixture\Class98(
                    new \DiContainerBenchmarks\Fixture\Class97(
                        new \DiContainerBenchmarks\Fixture\Class96(
                            new \DiContainerBenchmarks\Fixture\Class95(
                                new \DiContainerBenchmarks\Fixture\Class94(
                                    new \DiContainerBenchmarks\Fixture\Class93(
                                        new \DiContainerBenchmarks\Fixture\Class92(
                                            new \DiContainerBenchmarks\Fixture\Class91(
                                                new \DiContainerBenchmarks\Fixture\Class90(
                                                    new \DiContainerBenchmarks\Fixture\Class89(
                                                        new \DiContainerBenchmarks\Fixture\Class88(
                                                            new \DiContainerBenchmarks\Fixture\Class87(
                                                                new \DiContainerBenchmarks\Fixture\Class86(
                                                                    new \DiContainerBenchmarks\Fixture\Class85(
                                                                        new \DiContainerBenchmarks\Fixture\Class84(
                                                                            new \DiContainerBenchmarks\Fixture\Class83(
                                                                                new \DiContainerBenchmarks\Fixture\Class82(
                                                                                    new \DiContainerBenchmarks\Fixture\Class81(
                                                                                        new \DiContainerBenchmarks\Fixture\Class80(
                                                                                            new \DiContainerBenchmarks\Fixture\Class79(
                                                                                                new \DiContainerBenchmarks\Fixture\Class78(
                                                                                                    new \DiContainerBenchmarks\Fixture\Class77(
                                                                                                        new \DiContainerBenchmarks\Fixture\Class76(
                                                                                                            new \DiContainerBenchmarks\Fixture\Class75(
                                                                                                                new \DiContainerBenchmarks\Fixture\Class74(
                                                                                                                    new \DiContainerBenchmarks\Fixture\Class73(
                                                                                                                        new \DiContainerBenchmarks\Fixture\Class72(
                                                                                                                            new \DiContainerBenchmarks\Fixture\Class71(
                                                                                                                                new \DiContainerBenchmarks\Fixture\Class70(
                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class69(
                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class68(
                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class67(
                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class66(
                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class65(
                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class64(
                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class63(
                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class62(
                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class61(
                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class60(
                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class59(
                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class58(
                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class57(
                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class56(
                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class55(
                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class54(
                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class53(
                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class52(
                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class51(
                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class50(
                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class49(
                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class48(
                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class47(
                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class46(
                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class45(
                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class44(
                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class43(
                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class42(
                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class41(
                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class40(
                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class39(
                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class38(
                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class37(
                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class36(
                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class35(
                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class34(
                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class33(
                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class32(
                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class31(
                                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class30(
                                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class29(
                                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class28(
                                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class27(
                                                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class26(
                                                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class25(
                                                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class24(
                                                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class23(
                                                                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class22(
                                                                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class21(
                                                                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class20(
                                                                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class19(
                                                                                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class18(
                                                                                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class17(
                                                                                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class16(
                                                                                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class15(
                                                                                                                                                                                                                                                                                                                                                                new \DiContainerBenchmarks\Fixture\Class14(
                                                                                                                                                                                                                                                                                                                                                                    new \DiContainerBenchmarks\Fixture\Class13(
                                                                                                                                                                                                                                                                                                                                                                        new \DiContainerBenchmarks\Fixture\Class12(
                                                                                                                                                                                                                                                                                                                                                                            new \DiContainerBenchmarks\Fixture\Class11(
                                                                                                                                                                                                                                                                                                                                                                                $this->singletonEntries['DiContainerBenchmarks\Fixture\Class10'] ?? $this->DiContainerBenchmarks__Fixture__Class10()
                                                                                                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                                )
                                                                                                                                                                                                                                            )
                                                                                                                                                                                                                                        )
                                                                                                                                                                                                                                    )
                                                                                                                                                                                                                                )
                                                                                                                                                                                                                            )
                                                                                                                                                                                                                        )
                                                                                                                                                                                                                    )
                                                                                                                                                                                                                )
                                                                                                                                                                                                            )
                                                                                                                                                                                                        )
                                                                                                                                                                                                    )
                                                                                                                                                                                                )
                                                                                                                                                                                            )
                                                                                                                                                                                        )
                                                                                                                                                                                    )
                                                                                                                                                                                )
                                                                                                                                                                            )
                                                                                                                                                                        )
                                                                                                                                                                    )
                                                                                                                                                                )
                                                                                                                                                            )
                                                                                                                                                        )
                                                                                                                                                    )
                                                                                                                                                )
                                                                                                                                            )
                                                                                                                                        )
                                                                                                                                    )
                                                                                                                                )
                                                                                                                            )
                                                                                                                        )
                                                                                                                    )
                                                                                                                )
                                                                                                            )
                                                                                                        )
                                                                                                    )
                                                                                                )
                                                                                            )
                                                                                        )
                                                                                    )
                                                                                )
                                                                            )
                                                                        )
                                                                    )
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    )
                )
            )
        );
    }
}
