<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ZendServiceManager;

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
use DiContainerBenchmarks\Fixture\Constructor\Class11;
use DiContainerBenchmarks\Fixture\Constructor\Class12;
use DiContainerBenchmarks\Fixture\Constructor\Class13;
use DiContainerBenchmarks\Fixture\Constructor\Class14;
use DiContainerBenchmarks\Fixture\Constructor\Class15;
use DiContainerBenchmarks\Fixture\Constructor\Class16;
use DiContainerBenchmarks\Fixture\Constructor\Class17;
use DiContainerBenchmarks\Fixture\Constructor\Class18;
use DiContainerBenchmarks\Fixture\Constructor\Class19;
use DiContainerBenchmarks\Fixture\Constructor\Class20;
use DiContainerBenchmarks\Fixture\Constructor\Class21;
use DiContainerBenchmarks\Fixture\Constructor\Class22;
use DiContainerBenchmarks\Fixture\Constructor\Class23;
use DiContainerBenchmarks\Fixture\Constructor\Class24;
use DiContainerBenchmarks\Fixture\Constructor\Class25;
use DiContainerBenchmarks\Fixture\Constructor\Class26;
use DiContainerBenchmarks\Fixture\Constructor\Class27;
use DiContainerBenchmarks\Fixture\Constructor\Class28;
use DiContainerBenchmarks\Fixture\Constructor\Class29;
use DiContainerBenchmarks\Fixture\Constructor\Class30;
use DiContainerBenchmarks\Fixture\Constructor\Class31;
use DiContainerBenchmarks\Fixture\Constructor\Class32;
use DiContainerBenchmarks\Fixture\Constructor\Class33;
use DiContainerBenchmarks\Fixture\Constructor\Class34;
use DiContainerBenchmarks\Fixture\Constructor\Class35;
use DiContainerBenchmarks\Fixture\Constructor\Class36;
use DiContainerBenchmarks\Fixture\Constructor\Class37;
use DiContainerBenchmarks\Fixture\Constructor\Class38;
use DiContainerBenchmarks\Fixture\Constructor\Class39;
use DiContainerBenchmarks\Fixture\Constructor\Class40;
use DiContainerBenchmarks\Fixture\Constructor\Class41;
use DiContainerBenchmarks\Fixture\Constructor\Class42;
use DiContainerBenchmarks\Fixture\Constructor\Class43;
use DiContainerBenchmarks\Fixture\Constructor\Class44;
use DiContainerBenchmarks\Fixture\Constructor\Class45;
use DiContainerBenchmarks\Fixture\Constructor\Class46;
use DiContainerBenchmarks\Fixture\Constructor\Class47;
use DiContainerBenchmarks\Fixture\Constructor\Class48;
use DiContainerBenchmarks\Fixture\Constructor\Class49;
use DiContainerBenchmarks\Fixture\Constructor\Class50;
use DiContainerBenchmarks\Fixture\Constructor\Class51;
use DiContainerBenchmarks\Fixture\Constructor\Class52;
use DiContainerBenchmarks\Fixture\Constructor\Class53;
use DiContainerBenchmarks\Fixture\Constructor\Class54;
use DiContainerBenchmarks\Fixture\Constructor\Class55;
use DiContainerBenchmarks\Fixture\Constructor\Class56;
use DiContainerBenchmarks\Fixture\Constructor\Class57;
use DiContainerBenchmarks\Fixture\Constructor\Class58;
use DiContainerBenchmarks\Fixture\Constructor\Class59;
use DiContainerBenchmarks\Fixture\Constructor\Class60;
use DiContainerBenchmarks\Fixture\Constructor\Class61;
use DiContainerBenchmarks\Fixture\Constructor\Class62;
use DiContainerBenchmarks\Fixture\Constructor\Class63;
use DiContainerBenchmarks\Fixture\Constructor\Class64;
use DiContainerBenchmarks\Fixture\Constructor\Class65;
use DiContainerBenchmarks\Fixture\Constructor\Class66;
use DiContainerBenchmarks\Fixture\Constructor\Class67;
use DiContainerBenchmarks\Fixture\Constructor\Class68;
use DiContainerBenchmarks\Fixture\Constructor\Class69;
use DiContainerBenchmarks\Fixture\Constructor\Class70;
use DiContainerBenchmarks\Fixture\Constructor\Class71;
use DiContainerBenchmarks\Fixture\Constructor\Class72;
use DiContainerBenchmarks\Fixture\Constructor\Class73;
use DiContainerBenchmarks\Fixture\Constructor\Class74;
use DiContainerBenchmarks\Fixture\Constructor\Class75;
use DiContainerBenchmarks\Fixture\Constructor\Class76;
use DiContainerBenchmarks\Fixture\Constructor\Class77;
use DiContainerBenchmarks\Fixture\Constructor\Class78;
use DiContainerBenchmarks\Fixture\Constructor\Class79;
use DiContainerBenchmarks\Fixture\Constructor\Class80;
use DiContainerBenchmarks\Fixture\Constructor\Class81;
use DiContainerBenchmarks\Fixture\Constructor\Class82;
use DiContainerBenchmarks\Fixture\Constructor\Class83;
use DiContainerBenchmarks\Fixture\Constructor\Class84;
use DiContainerBenchmarks\Fixture\Constructor\Class85;
use DiContainerBenchmarks\Fixture\Constructor\Class86;
use DiContainerBenchmarks\Fixture\Constructor\Class87;
use DiContainerBenchmarks\Fixture\Constructor\Class88;
use DiContainerBenchmarks\Fixture\Constructor\Class89;
use DiContainerBenchmarks\Fixture\Constructor\Class90;
use DiContainerBenchmarks\Fixture\Constructor\Class91;
use DiContainerBenchmarks\Fixture\Constructor\Class92;
use DiContainerBenchmarks\Fixture\Constructor\Class93;
use DiContainerBenchmarks\Fixture\Constructor\Class94;
use DiContainerBenchmarks\Fixture\Constructor\Class95;
use DiContainerBenchmarks\Fixture\Constructor\Class96;
use DiContainerBenchmarks\Fixture\Constructor\Class97;
use DiContainerBenchmarks\Fixture\Constructor\Class98;
use DiContainerBenchmarks\Fixture\Constructor\Class99;
use DiContainerBenchmarks\Fixture\Constructor\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\ServiceManager\ServiceManager;

abstract class AbstractZendServiceManagerTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function startup(): void
    {
        // Generated with:
        // for ($i = 1; $i <= 100; $i++) {
        // echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
        // }

        // echo "[\n";
        // for ($i = 1; $i <= 100; $i++) {
        // echo "    Class" . $i . "::class => function(ContainerInterface \$container) {\n";
        // echo "        return new Class" . $i . "(\$container->get(Class" . ($i-1) . "::class));\n";
        // echo "    },\n";
        // }
        // echo "]\n";

        $serviceManager = new ServiceManager(
            [
                "factories" => [
                    Class1::class => InvokableFactory::class,
                    Class2::class => function(ContainerInterface $container) {
                        return new Class2($container->get(Class1::class));
                    },
                    Class3::class => function(ContainerInterface $container) {
                        return new Class3($container->get(Class2::class));
                    },
                    Class4::class => function(ContainerInterface $container) {
                        return new Class4($container->get(Class3::class));
                    },
                    Class5::class => function(ContainerInterface $container) {
                        return new Class5($container->get(Class4::class));
                    },
                    Class6::class => function(ContainerInterface $container) {
                        return new Class6($container->get(Class5::class));
                    },
                    Class7::class => function(ContainerInterface $container) {
                        return new Class7($container->get(Class6::class));
                    },
                    Class8::class => function(ContainerInterface $container) {
                        return new Class8($container->get(Class7::class));
                    },
                    Class9::class => function(ContainerInterface $container) {
                        return new Class9($container->get(Class8::class));
                    },
                    Class10::class => function(ContainerInterface $container) {
                        return new Class10($container->get(Class9::class));
                    },
                    Class11::class => function(ContainerInterface $container) {
                        return new Class11($container->get(Class10::class));
                    },
                    Class12::class => function(ContainerInterface $container) {
                        return new Class12($container->get(Class11::class));
                    },
                    Class13::class => function(ContainerInterface $container) {
                        return new Class13($container->get(Class12::class));
                    },
                    Class14::class => function(ContainerInterface $container) {
                        return new Class14($container->get(Class13::class));
                    },
                    Class15::class => function(ContainerInterface $container) {
                        return new Class15($container->get(Class14::class));
                    },
                    Class16::class => function(ContainerInterface $container) {
                        return new Class16($container->get(Class15::class));
                    },
                    Class17::class => function(ContainerInterface $container) {
                        return new Class17($container->get(Class16::class));
                    },
                    Class18::class => function(ContainerInterface $container) {
                        return new Class18($container->get(Class17::class));
                    },
                    Class19::class => function(ContainerInterface $container) {
                        return new Class19($container->get(Class18::class));
                    },
                    Class20::class => function(ContainerInterface $container) {
                        return new Class20($container->get(Class19::class));
                    },
                    Class21::class => function(ContainerInterface $container) {
                        return new Class21($container->get(Class20::class));
                    },
                    Class22::class => function(ContainerInterface $container) {
                        return new Class22($container->get(Class21::class));
                    },
                    Class23::class => function(ContainerInterface $container) {
                        return new Class23($container->get(Class22::class));
                    },
                    Class24::class => function(ContainerInterface $container) {
                        return new Class24($container->get(Class23::class));
                    },
                    Class25::class => function(ContainerInterface $container) {
                        return new Class25($container->get(Class24::class));
                    },
                    Class26::class => function(ContainerInterface $container) {
                        return new Class26($container->get(Class25::class));
                    },
                    Class27::class => function(ContainerInterface $container) {
                        return new Class27($container->get(Class26::class));
                    },
                    Class28::class => function(ContainerInterface $container) {
                        return new Class28($container->get(Class27::class));
                    },
                    Class29::class => function(ContainerInterface $container) {
                        return new Class29($container->get(Class28::class));
                    },
                    Class30::class => function(ContainerInterface $container) {
                        return new Class30($container->get(Class29::class));
                    },
                    Class31::class => function(ContainerInterface $container) {
                        return new Class31($container->get(Class30::class));
                    },
                    Class32::class => function(ContainerInterface $container) {
                        return new Class32($container->get(Class31::class));
                    },
                    Class33::class => function(ContainerInterface $container) {
                        return new Class33($container->get(Class32::class));
                    },
                    Class34::class => function(ContainerInterface $container) {
                        return new Class34($container->get(Class33::class));
                    },
                    Class35::class => function(ContainerInterface $container) {
                        return new Class35($container->get(Class34::class));
                    },
                    Class36::class => function(ContainerInterface $container) {
                        return new Class36($container->get(Class35::class));
                    },
                    Class37::class => function(ContainerInterface $container) {
                        return new Class37($container->get(Class36::class));
                    },
                    Class38::class => function(ContainerInterface $container) {
                        return new Class38($container->get(Class37::class));
                    },
                    Class39::class => function(ContainerInterface $container) {
                        return new Class39($container->get(Class38::class));
                    },
                    Class40::class => function(ContainerInterface $container) {
                        return new Class40($container->get(Class39::class));
                    },
                    Class41::class => function(ContainerInterface $container) {
                        return new Class41($container->get(Class40::class));
                    },
                    Class42::class => function(ContainerInterface $container) {
                        return new Class42($container->get(Class41::class));
                    },
                    Class43::class => function(ContainerInterface $container) {
                        return new Class43($container->get(Class42::class));
                    },
                    Class44::class => function(ContainerInterface $container) {
                        return new Class44($container->get(Class43::class));
                    },
                    Class45::class => function(ContainerInterface $container) {
                        return new Class45($container->get(Class44::class));
                    },
                    Class46::class => function(ContainerInterface $container) {
                        return new Class46($container->get(Class45::class));
                    },
                    Class47::class => function(ContainerInterface $container) {
                        return new Class47($container->get(Class46::class));
                    },
                    Class48::class => function(ContainerInterface $container) {
                        return new Class48($container->get(Class47::class));
                    },
                    Class49::class => function(ContainerInterface $container) {
                        return new Class49($container->get(Class48::class));
                    },
                    Class50::class => function(ContainerInterface $container) {
                        return new Class50($container->get(Class49::class));
                    },
                    Class51::class => function(ContainerInterface $container) {
                        return new Class51($container->get(Class50::class));
                    },
                    Class52::class => function(ContainerInterface $container) {
                        return new Class52($container->get(Class51::class));
                    },
                    Class53::class => function(ContainerInterface $container) {
                        return new Class53($container->get(Class52::class));
                    },
                    Class54::class => function(ContainerInterface $container) {
                        return new Class54($container->get(Class53::class));
                    },
                    Class55::class => function(ContainerInterface $container) {
                        return new Class55($container->get(Class54::class));
                    },
                    Class56::class => function(ContainerInterface $container) {
                        return new Class56($container->get(Class55::class));
                    },
                    Class57::class => function(ContainerInterface $container) {
                        return new Class57($container->get(Class56::class));
                    },
                    Class58::class => function(ContainerInterface $container) {
                        return new Class58($container->get(Class57::class));
                    },
                    Class59::class => function(ContainerInterface $container) {
                        return new Class59($container->get(Class58::class));
                    },
                    Class60::class => function(ContainerInterface $container) {
                        return new Class60($container->get(Class59::class));
                    },
                    Class61::class => function(ContainerInterface $container) {
                        return new Class61($container->get(Class60::class));
                    },
                    Class62::class => function(ContainerInterface $container) {
                        return new Class62($container->get(Class61::class));
                    },
                    Class63::class => function(ContainerInterface $container) {
                        return new Class63($container->get(Class62::class));
                    },
                    Class64::class => function(ContainerInterface $container) {
                        return new Class64($container->get(Class63::class));
                    },
                    Class65::class => function(ContainerInterface $container) {
                        return new Class65($container->get(Class64::class));
                    },
                    Class66::class => function(ContainerInterface $container) {
                        return new Class66($container->get(Class65::class));
                    },
                    Class67::class => function(ContainerInterface $container) {
                        return new Class67($container->get(Class66::class));
                    },
                    Class68::class => function(ContainerInterface $container) {
                        return new Class68($container->get(Class67::class));
                    },
                    Class69::class => function(ContainerInterface $container) {
                        return new Class69($container->get(Class68::class));
                    },
                    Class70::class => function(ContainerInterface $container) {
                        return new Class70($container->get(Class69::class));
                    },
                    Class71::class => function(ContainerInterface $container) {
                        return new Class71($container->get(Class70::class));
                    },
                    Class72::class => function(ContainerInterface $container) {
                        return new Class72($container->get(Class71::class));
                    },
                    Class73::class => function(ContainerInterface $container) {
                        return new Class73($container->get(Class72::class));
                    },
                    Class74::class => function(ContainerInterface $container) {
                        return new Class74($container->get(Class73::class));
                    },
                    Class75::class => function(ContainerInterface $container) {
                        return new Class75($container->get(Class74::class));
                    },
                    Class76::class => function(ContainerInterface $container) {
                        return new Class76($container->get(Class75::class));
                    },
                    Class77::class => function(ContainerInterface $container) {
                        return new Class77($container->get(Class76::class));
                    },
                    Class78::class => function(ContainerInterface $container) {
                        return new Class78($container->get(Class77::class));
                    },
                    Class79::class => function(ContainerInterface $container) {
                        return new Class79($container->get(Class78::class));
                    },
                    Class80::class => function(ContainerInterface $container) {
                        return new Class80($container->get(Class79::class));
                    },
                    Class81::class => function(ContainerInterface $container) {
                        return new Class81($container->get(Class80::class));
                    },
                    Class82::class => function(ContainerInterface $container) {
                        return new Class82($container->get(Class81::class));
                    },
                    Class83::class => function(ContainerInterface $container) {
                        return new Class83($container->get(Class82::class));
                    },
                    Class84::class => function(ContainerInterface $container) {
                        return new Class84($container->get(Class83::class));
                    },
                    Class85::class => function(ContainerInterface $container) {
                        return new Class85($container->get(Class84::class));
                    },
                    Class86::class => function(ContainerInterface $container) {
                        return new Class86($container->get(Class85::class));
                    },
                    Class87::class => function(ContainerInterface $container) {
                        return new Class87($container->get(Class86::class));
                    },
                    Class88::class => function(ContainerInterface $container) {
                        return new Class88($container->get(Class87::class));
                    },
                    Class89::class => function(ContainerInterface $container) {
                        return new Class89($container->get(Class88::class));
                    },
                    Class90::class => function(ContainerInterface $container) {
                        return new Class90($container->get(Class89::class));
                    },
                    Class91::class => function(ContainerInterface $container) {
                        return new Class91($container->get(Class90::class));
                    },
                    Class92::class => function(ContainerInterface $container) {
                        return new Class92($container->get(Class91::class));
                    },
                    Class93::class => function(ContainerInterface $container) {
                        return new Class93($container->get(Class92::class));
                    },
                    Class94::class => function(ContainerInterface $container) {
                        return new Class94($container->get(Class93::class));
                    },
                    Class95::class => function(ContainerInterface $container) {
                        return new Class95($container->get(Class94::class));
                    },
                    Class96::class => function(ContainerInterface $container) {
                        return new Class96($container->get(Class95::class));
                    },
                    Class97::class => function(ContainerInterface $container) {
                        return new Class97($container->get(Class96::class));
                    },
                    Class98::class => function(ContainerInterface $container) {
                        return new Class98($container->get(Class97::class));
                    },
                    Class99::class => function(ContainerInterface $container) {
                        return new Class99($container->get(Class98::class));
                    },
                    Class100::class => function(ContainerInterface $container) {
                        return new Class100($container->get(Class99::class));
                    },
                ],
                "shared_by_default" => true,
            ]
        );

        $this->container = $serviceManager;
    }
}
