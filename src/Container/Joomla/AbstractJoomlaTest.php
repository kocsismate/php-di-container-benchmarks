<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class2;
use DiContainerBenchmarks\Fixture\Class3;
use DiContainerBenchmarks\Fixture\Class4;
use DiContainerBenchmarks\Fixture\Class5;
use DiContainerBenchmarks\Fixture\Class6;
use DiContainerBenchmarks\Fixture\Class7;
use DiContainerBenchmarks\Fixture\Class8;
use DiContainerBenchmarks\Fixture\Class9;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class11;
use DiContainerBenchmarks\Fixture\Class12;
use DiContainerBenchmarks\Fixture\Class13;
use DiContainerBenchmarks\Fixture\Class14;
use DiContainerBenchmarks\Fixture\Class15;
use DiContainerBenchmarks\Fixture\Class16;
use DiContainerBenchmarks\Fixture\Class17;
use DiContainerBenchmarks\Fixture\Class18;
use DiContainerBenchmarks\Fixture\Class19;
use DiContainerBenchmarks\Fixture\Class20;
use DiContainerBenchmarks\Fixture\Class21;
use DiContainerBenchmarks\Fixture\Class22;
use DiContainerBenchmarks\Fixture\Class23;
use DiContainerBenchmarks\Fixture\Class24;
use DiContainerBenchmarks\Fixture\Class25;
use DiContainerBenchmarks\Fixture\Class26;
use DiContainerBenchmarks\Fixture\Class27;
use DiContainerBenchmarks\Fixture\Class28;
use DiContainerBenchmarks\Fixture\Class29;
use DiContainerBenchmarks\Fixture\Class30;
use DiContainerBenchmarks\Fixture\Class31;
use DiContainerBenchmarks\Fixture\Class32;
use DiContainerBenchmarks\Fixture\Class33;
use DiContainerBenchmarks\Fixture\Class34;
use DiContainerBenchmarks\Fixture\Class35;
use DiContainerBenchmarks\Fixture\Class36;
use DiContainerBenchmarks\Fixture\Class37;
use DiContainerBenchmarks\Fixture\Class38;
use DiContainerBenchmarks\Fixture\Class39;
use DiContainerBenchmarks\Fixture\Class40;
use DiContainerBenchmarks\Fixture\Class41;
use DiContainerBenchmarks\Fixture\Class42;
use DiContainerBenchmarks\Fixture\Class43;
use DiContainerBenchmarks\Fixture\Class44;
use DiContainerBenchmarks\Fixture\Class45;
use DiContainerBenchmarks\Fixture\Class46;
use DiContainerBenchmarks\Fixture\Class47;
use DiContainerBenchmarks\Fixture\Class48;
use DiContainerBenchmarks\Fixture\Class49;
use DiContainerBenchmarks\Fixture\Class50;
use DiContainerBenchmarks\Fixture\Class51;
use DiContainerBenchmarks\Fixture\Class52;
use DiContainerBenchmarks\Fixture\Class53;
use DiContainerBenchmarks\Fixture\Class54;
use DiContainerBenchmarks\Fixture\Class55;
use DiContainerBenchmarks\Fixture\Class56;
use DiContainerBenchmarks\Fixture\Class57;
use DiContainerBenchmarks\Fixture\Class58;
use DiContainerBenchmarks\Fixture\Class59;
use DiContainerBenchmarks\Fixture\Class60;
use DiContainerBenchmarks\Fixture\Class61;
use DiContainerBenchmarks\Fixture\Class62;
use DiContainerBenchmarks\Fixture\Class63;
use DiContainerBenchmarks\Fixture\Class64;
use DiContainerBenchmarks\Fixture\Class65;
use DiContainerBenchmarks\Fixture\Class66;
use DiContainerBenchmarks\Fixture\Class67;
use DiContainerBenchmarks\Fixture\Class68;
use DiContainerBenchmarks\Fixture\Class69;
use DiContainerBenchmarks\Fixture\Class70;
use DiContainerBenchmarks\Fixture\Class71;
use DiContainerBenchmarks\Fixture\Class72;
use DiContainerBenchmarks\Fixture\Class73;
use DiContainerBenchmarks\Fixture\Class74;
use DiContainerBenchmarks\Fixture\Class75;
use DiContainerBenchmarks\Fixture\Class76;
use DiContainerBenchmarks\Fixture\Class77;
use DiContainerBenchmarks\Fixture\Class78;
use DiContainerBenchmarks\Fixture\Class79;
use DiContainerBenchmarks\Fixture\Class80;
use DiContainerBenchmarks\Fixture\Class81;
use DiContainerBenchmarks\Fixture\Class82;
use DiContainerBenchmarks\Fixture\Class83;
use DiContainerBenchmarks\Fixture\Class84;
use DiContainerBenchmarks\Fixture\Class85;
use DiContainerBenchmarks\Fixture\Class86;
use DiContainerBenchmarks\Fixture\Class87;
use DiContainerBenchmarks\Fixture\Class88;
use DiContainerBenchmarks\Fixture\Class89;
use DiContainerBenchmarks\Fixture\Class90;
use DiContainerBenchmarks\Fixture\Class91;
use DiContainerBenchmarks\Fixture\Class92;
use DiContainerBenchmarks\Fixture\Class93;
use DiContainerBenchmarks\Fixture\Class94;
use DiContainerBenchmarks\Fixture\Class95;
use DiContainerBenchmarks\Fixture\Class96;
use DiContainerBenchmarks\Fixture\Class97;
use DiContainerBenchmarks\Fixture\Class98;
use DiContainerBenchmarks\Fixture\Class99;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use Joomla\DI\Container;

abstract class AbstractJoomlaTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i = 2; $i <= 100; $i++) {
               echo "\$container->set(Class" . $i . "::class, function (Container \$container) {\n";
               echo "    return new Class" . $i . "(\$container->get(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
        */
        $container = new Container();

        $container->set(Class1::class, new Class1());

        $container->set(Class2::class, function (Container $container) {
            return new Class2($container->get(Class1::class));
        });

        $container->set(Class3::class, function (Container $container) {
            return new Class3($container->get(Class2::class));
        });

        $container->set(Class4::class, function (Container $container) {
            return new Class4($container->get(Class3::class));
        });

        $container->set(Class5::class, function (Container $container) {
            return new Class5($container->get(Class4::class));
        });

        $container->set(Class6::class, function (Container $container) {
            return new Class6($container->get(Class5::class));
        });

        $container->set(Class7::class, function (Container $container) {
            return new Class7($container->get(Class6::class));
        });

        $container->set(Class8::class, function (Container $container) {
            return new Class8($container->get(Class7::class));
        });

        $container->set(Class9::class, function (Container $container) {
            return new Class9($container->get(Class8::class));
        });

        $container->set(Class10::class, function (Container $container) {
            return new Class10($container->get(Class9::class));
        });

        $container->set(Class11::class, function (Container $container) {
            return new Class11($container->get(Class10::class));
        });

        $container->set(Class12::class, function (Container $container) {
            return new Class12($container->get(Class11::class));
        });

        $container->set(Class13::class, function (Container $container) {
            return new Class13($container->get(Class12::class));
        });

        $container->set(Class14::class, function (Container $container) {
            return new Class14($container->get(Class13::class));
        });

        $container->set(Class15::class, function (Container $container) {
            return new Class15($container->get(Class14::class));
        });

        $container->set(Class16::class, function (Container $container) {
            return new Class16($container->get(Class15::class));
        });

        $container->set(Class17::class, function (Container $container) {
            return new Class17($container->get(Class16::class));
        });

        $container->set(Class18::class, function (Container $container) {
            return new Class18($container->get(Class17::class));
        });

        $container->set(Class19::class, function (Container $container) {
            return new Class19($container->get(Class18::class));
        });

        $container->set(Class20::class, function (Container $container) {
            return new Class20($container->get(Class19::class));
        });

        $container->set(Class21::class, function (Container $container) {
            return new Class21($container->get(Class20::class));
        });

        $container->set(Class22::class, function (Container $container) {
            return new Class22($container->get(Class21::class));
        });

        $container->set(Class23::class, function (Container $container) {
            return new Class23($container->get(Class22::class));
        });

        $container->set(Class24::class, function (Container $container) {
            return new Class24($container->get(Class23::class));
        });

        $container->set(Class25::class, function (Container $container) {
            return new Class25($container->get(Class24::class));
        });

        $container->set(Class26::class, function (Container $container) {
            return new Class26($container->get(Class25::class));
        });

        $container->set(Class27::class, function (Container $container) {
            return new Class27($container->get(Class26::class));
        });

        $container->set(Class28::class, function (Container $container) {
            return new Class28($container->get(Class27::class));
        });

        $container->set(Class29::class, function (Container $container) {
            return new Class29($container->get(Class28::class));
        });

        $container->set(Class30::class, function (Container $container) {
            return new Class30($container->get(Class29::class));
        });

        $container->set(Class31::class, function (Container $container) {
            return new Class31($container->get(Class30::class));
        });

        $container->set(Class32::class, function (Container $container) {
            return new Class32($container->get(Class31::class));
        });

        $container->set(Class33::class, function (Container $container) {
            return new Class33($container->get(Class32::class));
        });

        $container->set(Class34::class, function (Container $container) {
            return new Class34($container->get(Class33::class));
        });

        $container->set(Class35::class, function (Container $container) {
            return new Class35($container->get(Class34::class));
        });

        $container->set(Class36::class, function (Container $container) {
            return new Class36($container->get(Class35::class));
        });

        $container->set(Class37::class, function (Container $container) {
            return new Class37($container->get(Class36::class));
        });

        $container->set(Class38::class, function (Container $container) {
            return new Class38($container->get(Class37::class));
        });

        $container->set(Class39::class, function (Container $container) {
            return new Class39($container->get(Class38::class));
        });

        $container->set(Class40::class, function (Container $container) {
            return new Class40($container->get(Class39::class));
        });

        $container->set(Class41::class, function (Container $container) {
            return new Class41($container->get(Class40::class));
        });

        $container->set(Class42::class, function (Container $container) {
            return new Class42($container->get(Class41::class));
        });

        $container->set(Class43::class, function (Container $container) {
            return new Class43($container->get(Class42::class));
        });

        $container->set(Class44::class, function (Container $container) {
            return new Class44($container->get(Class43::class));
        });

        $container->set(Class45::class, function (Container $container) {
            return new Class45($container->get(Class44::class));
        });

        $container->set(Class46::class, function (Container $container) {
            return new Class46($container->get(Class45::class));
        });

        $container->set(Class47::class, function (Container $container) {
            return new Class47($container->get(Class46::class));
        });

        $container->set(Class48::class, function (Container $container) {
            return new Class48($container->get(Class47::class));
        });

        $container->set(Class49::class, function (Container $container) {
            return new Class49($container->get(Class48::class));
        });

        $container->set(Class50::class, function (Container $container) {
            return new Class50($container->get(Class49::class));
        });

        $container->set(Class51::class, function (Container $container) {
            return new Class51($container->get(Class50::class));
        });

        $container->set(Class52::class, function (Container $container) {
            return new Class52($container->get(Class51::class));
        });

        $container->set(Class53::class, function (Container $container) {
            return new Class53($container->get(Class52::class));
        });

        $container->set(Class54::class, function (Container $container) {
            return new Class54($container->get(Class53::class));
        });

        $container->set(Class55::class, function (Container $container) {
            return new Class55($container->get(Class54::class));
        });

        $container->set(Class56::class, function (Container $container) {
            return new Class56($container->get(Class55::class));
        });

        $container->set(Class57::class, function (Container $container) {
            return new Class57($container->get(Class56::class));
        });

        $container->set(Class58::class, function (Container $container) {
            return new Class58($container->get(Class57::class));
        });

        $container->set(Class59::class, function (Container $container) {
            return new Class59($container->get(Class58::class));
        });

        $container->set(Class60::class, function (Container $container) {
            return new Class60($container->get(Class59::class));
        });

        $container->set(Class61::class, function (Container $container) {
            return new Class61($container->get(Class60::class));
        });

        $container->set(Class62::class, function (Container $container) {
            return new Class62($container->get(Class61::class));
        });

        $container->set(Class63::class, function (Container $container) {
            return new Class63($container->get(Class62::class));
        });

        $container->set(Class64::class, function (Container $container) {
            return new Class64($container->get(Class63::class));
        });

        $container->set(Class65::class, function (Container $container) {
            return new Class65($container->get(Class64::class));
        });

        $container->set(Class66::class, function (Container $container) {
            return new Class66($container->get(Class65::class));
        });

        $container->set(Class67::class, function (Container $container) {
            return new Class67($container->get(Class66::class));
        });

        $container->set(Class68::class, function (Container $container) {
            return new Class68($container->get(Class67::class));
        });

        $container->set(Class69::class, function (Container $container) {
            return new Class69($container->get(Class68::class));
        });

        $container->set(Class70::class, function (Container $container) {
            return new Class70($container->get(Class69::class));
        });

        $container->set(Class71::class, function (Container $container) {
            return new Class71($container->get(Class70::class));
        });

        $container->set(Class72::class, function (Container $container) {
            return new Class72($container->get(Class71::class));
        });

        $container->set(Class73::class, function (Container $container) {
            return new Class73($container->get(Class72::class));
        });

        $container->set(Class74::class, function (Container $container) {
            return new Class74($container->get(Class73::class));
        });

        $container->set(Class75::class, function (Container $container) {
            return new Class75($container->get(Class74::class));
        });

        $container->set(Class76::class, function (Container $container) {
            return new Class76($container->get(Class75::class));
        });

        $container->set(Class77::class, function (Container $container) {
            return new Class77($container->get(Class76::class));
        });

        $container->set(Class78::class, function (Container $container) {
            return new Class78($container->get(Class77::class));
        });

        $container->set(Class79::class, function (Container $container) {
            return new Class79($container->get(Class78::class));
        });

        $container->set(Class80::class, function (Container $container) {
            return new Class80($container->get(Class79::class));
        });

        $container->set(Class81::class, function (Container $container) {
            return new Class81($container->get(Class80::class));
        });

        $container->set(Class82::class, function (Container $container) {
            return new Class82($container->get(Class81::class));
        });

        $container->set(Class83::class, function (Container $container) {
            return new Class83($container->get(Class82::class));
        });

        $container->set(Class84::class, function (Container $container) {
            return new Class84($container->get(Class83::class));
        });

        $container->set(Class85::class, function (Container $container) {
            return new Class85($container->get(Class84::class));
        });

        $container->set(Class86::class, function (Container $container) {
            return new Class86($container->get(Class85::class));
        });

        $container->set(Class87::class, function (Container $container) {
            return new Class87($container->get(Class86::class));
        });

        $container->set(Class88::class, function (Container $container) {
            return new Class88($container->get(Class87::class));
        });

        $container->set(Class89::class, function (Container $container) {
            return new Class89($container->get(Class88::class));
        });

        $container->set(Class90::class, function (Container $container) {
            return new Class90($container->get(Class89::class));
        });

        $container->set(Class91::class, function (Container $container) {
            return new Class91($container->get(Class90::class));
        });

        $container->set(Class92::class, function (Container $container) {
            return new Class92($container->get(Class91::class));
        });

        $container->set(Class93::class, function (Container $container) {
            return new Class93($container->get(Class92::class));
        });

        $container->set(Class94::class, function (Container $container) {
            return new Class94($container->get(Class93::class));
        });

        $container->set(Class95::class, function (Container $container) {
            return new Class95($container->get(Class94::class));
        });

        $container->set(Class96::class, function (Container $container) {
            return new Class96($container->get(Class95::class));
        });

        $container->set(Class97::class, function (Container $container) {
            return new Class97($container->get(Class96::class));
        });

        $container->set(Class98::class, function (Container $container) {
            return new Class98($container->get(Class97::class));
        });

        $container->set(Class99::class, function (Container $container) {
            return new Class99($container->get(Class98::class));
        });

        $container->set(Class100::class, function (Container $container) {
            return new Class100($container->get(Class99::class));
        });

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i = 2; $i <= 100; $i++) {
               echo "\$container->share(Class" . $i . "::class, function (Container \$container) {\n";
               echo "    return new Class" . $i . "(\$container->get(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
        */
        $container = new Container();

        $container->share(Class1::class, new Class1());

        $container->share(Class2::class, function (Container $container) {
            return new Class2($container->get(Class1::class));
        });

        $container->share(Class3::class, function (Container $container) {
            return new Class3($container->get(Class2::class));
        });

        $container->share(Class4::class, function (Container $container) {
            return new Class4($container->get(Class3::class));
        });

        $container->share(Class5::class, function (Container $container) {
            return new Class5($container->get(Class4::class));
        });

        $container->share(Class6::class, function (Container $container) {
            return new Class6($container->get(Class5::class));
        });

        $container->share(Class7::class, function (Container $container) {
            return new Class7($container->get(Class6::class));
        });

        $container->share(Class8::class, function (Container $container) {
            return new Class8($container->get(Class7::class));
        });

        $container->share(Class9::class, function (Container $container) {
            return new Class9($container->get(Class8::class));
        });

        $container->share(Class10::class, function (Container $container) {
            return new Class10($container->get(Class9::class));
        });

        $container->share(Class11::class, function (Container $container) {
            return new Class11($container->get(Class10::class));
        });

        $container->share(Class12::class, function (Container $container) {
            return new Class12($container->get(Class11::class));
        });

        $container->share(Class13::class, function (Container $container) {
            return new Class13($container->get(Class12::class));
        });

        $container->share(Class14::class, function (Container $container) {
            return new Class14($container->get(Class13::class));
        });

        $container->share(Class15::class, function (Container $container) {
            return new Class15($container->get(Class14::class));
        });

        $container->share(Class16::class, function (Container $container) {
            return new Class16($container->get(Class15::class));
        });

        $container->share(Class17::class, function (Container $container) {
            return new Class17($container->get(Class16::class));
        });

        $container->share(Class18::class, function (Container $container) {
            return new Class18($container->get(Class17::class));
        });

        $container->share(Class19::class, function (Container $container) {
            return new Class19($container->get(Class18::class));
        });

        $container->share(Class20::class, function (Container $container) {
            return new Class20($container->get(Class19::class));
        });

        $container->share(Class21::class, function (Container $container) {
            return new Class21($container->get(Class20::class));
        });

        $container->share(Class22::class, function (Container $container) {
            return new Class22($container->get(Class21::class));
        });

        $container->share(Class23::class, function (Container $container) {
            return new Class23($container->get(Class22::class));
        });

        $container->share(Class24::class, function (Container $container) {
            return new Class24($container->get(Class23::class));
        });

        $container->share(Class25::class, function (Container $container) {
            return new Class25($container->get(Class24::class));
        });

        $container->share(Class26::class, function (Container $container) {
            return new Class26($container->get(Class25::class));
        });

        $container->share(Class27::class, function (Container $container) {
            return new Class27($container->get(Class26::class));
        });

        $container->share(Class28::class, function (Container $container) {
            return new Class28($container->get(Class27::class));
        });

        $container->share(Class29::class, function (Container $container) {
            return new Class29($container->get(Class28::class));
        });

        $container->share(Class30::class, function (Container $container) {
            return new Class30($container->get(Class29::class));
        });

        $container->share(Class31::class, function (Container $container) {
            return new Class31($container->get(Class30::class));
        });

        $container->share(Class32::class, function (Container $container) {
            return new Class32($container->get(Class31::class));
        });

        $container->share(Class33::class, function (Container $container) {
            return new Class33($container->get(Class32::class));
        });

        $container->share(Class34::class, function (Container $container) {
            return new Class34($container->get(Class33::class));
        });

        $container->share(Class35::class, function (Container $container) {
            return new Class35($container->get(Class34::class));
        });

        $container->share(Class36::class, function (Container $container) {
            return new Class36($container->get(Class35::class));
        });

        $container->share(Class37::class, function (Container $container) {
            return new Class37($container->get(Class36::class));
        });

        $container->share(Class38::class, function (Container $container) {
            return new Class38($container->get(Class37::class));
        });

        $container->share(Class39::class, function (Container $container) {
            return new Class39($container->get(Class38::class));
        });

        $container->share(Class40::class, function (Container $container) {
            return new Class40($container->get(Class39::class));
        });

        $container->share(Class41::class, function (Container $container) {
            return new Class41($container->get(Class40::class));
        });

        $container->share(Class42::class, function (Container $container) {
            return new Class42($container->get(Class41::class));
        });

        $container->share(Class43::class, function (Container $container) {
            return new Class43($container->get(Class42::class));
        });

        $container->share(Class44::class, function (Container $container) {
            return new Class44($container->get(Class43::class));
        });

        $container->share(Class45::class, function (Container $container) {
            return new Class45($container->get(Class44::class));
        });

        $container->share(Class46::class, function (Container $container) {
            return new Class46($container->get(Class45::class));
        });

        $container->share(Class47::class, function (Container $container) {
            return new Class47($container->get(Class46::class));
        });

        $container->share(Class48::class, function (Container $container) {
            return new Class48($container->get(Class47::class));
        });

        $container->share(Class49::class, function (Container $container) {
            return new Class49($container->get(Class48::class));
        });

        $container->share(Class50::class, function (Container $container) {
            return new Class50($container->get(Class49::class));
        });

        $container->share(Class51::class, function (Container $container) {
            return new Class51($container->get(Class50::class));
        });

        $container->share(Class52::class, function (Container $container) {
            return new Class52($container->get(Class51::class));
        });

        $container->share(Class53::class, function (Container $container) {
            return new Class53($container->get(Class52::class));
        });

        $container->share(Class54::class, function (Container $container) {
            return new Class54($container->get(Class53::class));
        });

        $container->share(Class55::class, function (Container $container) {
            return new Class55($container->get(Class54::class));
        });

        $container->share(Class56::class, function (Container $container) {
            return new Class56($container->get(Class55::class));
        });

        $container->share(Class57::class, function (Container $container) {
            return new Class57($container->get(Class56::class));
        });

        $container->share(Class58::class, function (Container $container) {
            return new Class58($container->get(Class57::class));
        });

        $container->share(Class59::class, function (Container $container) {
            return new Class59($container->get(Class58::class));
        });

        $container->share(Class60::class, function (Container $container) {
            return new Class60($container->get(Class59::class));
        });

        $container->share(Class61::class, function (Container $container) {
            return new Class61($container->get(Class60::class));
        });

        $container->share(Class62::class, function (Container $container) {
            return new Class62($container->get(Class61::class));
        });

        $container->share(Class63::class, function (Container $container) {
            return new Class63($container->get(Class62::class));
        });

        $container->share(Class64::class, function (Container $container) {
            return new Class64($container->get(Class63::class));
        });

        $container->share(Class65::class, function (Container $container) {
            return new Class65($container->get(Class64::class));
        });

        $container->share(Class66::class, function (Container $container) {
            return new Class66($container->get(Class65::class));
        });

        $container->share(Class67::class, function (Container $container) {
            return new Class67($container->get(Class66::class));
        });

        $container->share(Class68::class, function (Container $container) {
            return new Class68($container->get(Class67::class));
        });

        $container->share(Class69::class, function (Container $container) {
            return new Class69($container->get(Class68::class));
        });

        $container->share(Class70::class, function (Container $container) {
            return new Class70($container->get(Class69::class));
        });

        $container->share(Class71::class, function (Container $container) {
            return new Class71($container->get(Class70::class));
        });

        $container->share(Class72::class, function (Container $container) {
            return new Class72($container->get(Class71::class));
        });

        $container->share(Class73::class, function (Container $container) {
            return new Class73($container->get(Class72::class));
        });

        $container->share(Class74::class, function (Container $container) {
            return new Class74($container->get(Class73::class));
        });

        $container->share(Class75::class, function (Container $container) {
            return new Class75($container->get(Class74::class));
        });

        $container->share(Class76::class, function (Container $container) {
            return new Class76($container->get(Class75::class));
        });

        $container->share(Class77::class, function (Container $container) {
            return new Class77($container->get(Class76::class));
        });

        $container->share(Class78::class, function (Container $container) {
            return new Class78($container->get(Class77::class));
        });

        $container->share(Class79::class, function (Container $container) {
            return new Class79($container->get(Class78::class));
        });

        $container->share(Class80::class, function (Container $container) {
            return new Class80($container->get(Class79::class));
        });

        $container->share(Class81::class, function (Container $container) {
            return new Class81($container->get(Class80::class));
        });

        $container->share(Class82::class, function (Container $container) {
            return new Class82($container->get(Class81::class));
        });

        $container->share(Class83::class, function (Container $container) {
            return new Class83($container->get(Class82::class));
        });

        $container->share(Class84::class, function (Container $container) {
            return new Class84($container->get(Class83::class));
        });

        $container->share(Class85::class, function (Container $container) {
            return new Class85($container->get(Class84::class));
        });

        $container->share(Class86::class, function (Container $container) {
            return new Class86($container->get(Class85::class));
        });

        $container->share(Class87::class, function (Container $container) {
            return new Class87($container->get(Class86::class));
        });

        $container->share(Class88::class, function (Container $container) {
            return new Class88($container->get(Class87::class));
        });

        $container->share(Class89::class, function (Container $container) {
            return new Class89($container->get(Class88::class));
        });

        $container->share(Class90::class, function (Container $container) {
            return new Class90($container->get(Class89::class));
        });

        $container->share(Class91::class, function (Container $container) {
            return new Class91($container->get(Class90::class));
        });

        $container->share(Class92::class, function (Container $container) {
            return new Class92($container->get(Class91::class));
        });

        $container->share(Class93::class, function (Container $container) {
            return new Class93($container->get(Class92::class));
        });

        $container->share(Class94::class, function (Container $container) {
            return new Class94($container->get(Class93::class));
        });

        $container->share(Class95::class, function (Container $container) {
            return new Class95($container->get(Class94::class));
        });

        $container->share(Class96::class, function (Container $container) {
            return new Class96($container->get(Class95::class));
        });

        $container->share(Class97::class, function (Container $container) {
            return new Class97($container->get(Class96::class));
        });

        $container->share(Class98::class, function (Container $container) {
            return new Class98($container->get(Class97::class));
        });

        $container->share(Class99::class, function (Container $container) {
            return new Class99($container->get(Class98::class));
        });

        $container->share(Class100::class, function (Container $container) {
            return new Class100($container->get(Class99::class));
        });

        $this->container = $container;
    }
}
