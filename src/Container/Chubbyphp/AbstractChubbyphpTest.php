<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Fixture\Class11;
use DiContainerBenchmarks\Fixture\Class12;
use DiContainerBenchmarks\Fixture\Class13;
use DiContainerBenchmarks\Fixture\Class14;
use DiContainerBenchmarks\Fixture\Class15;
use DiContainerBenchmarks\Fixture\Class16;
use DiContainerBenchmarks\Fixture\Class17;
use DiContainerBenchmarks\Fixture\Class18;
use DiContainerBenchmarks\Fixture\Class19;
use DiContainerBenchmarks\Fixture\Class2;
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
use DiContainerBenchmarks\Fixture\Class3;
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
use DiContainerBenchmarks\Fixture\Class4;
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
use DiContainerBenchmarks\Fixture\Class5;
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
use DiContainerBenchmarks\Fixture\Class6;
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
use DiContainerBenchmarks\Fixture\Class7;
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
use DiContainerBenchmarks\Fixture\Class8;
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
use DiContainerBenchmarks\Fixture\Class9;
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
use DiContainerBenchmarks\Test\TestInterface;
use Chubbyphp\Container\Container;

abstract class AbstractChubbyphpTest implements TestInterface
{
    protected Container $container;

    protected function setContainerWithPrototypeServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
           }

           for ($i = 1; $i <= 100; $i++) {
               echo "\$container->prototypeFactory(Class" . $i . "::class, static function (Container \$container) {\n";
               echo "    return new Class" . $i . "(\$container->get(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
        */

        $container = new Container();

        $container->prototypeFactory(Class1::class, static function () {
            return new Class1();
        });

        $container->prototypeFactory(Class2::class, static function (Container $container) {
            return new Class2($container->get(Class1::class));
        });

        $container->prototypeFactory(Class3::class, static function (Container $container) {
            return new Class3($container->get(Class2::class));
        });

        $container->prototypeFactory(Class4::class, static function (Container $container) {
            return new Class4($container->get(Class3::class));
        });

        $container->prototypeFactory(Class5::class, static function (Container $container) {
            return new Class5($container->get(Class4::class));
        });

        $container->prototypeFactory(Class6::class, static function (Container $container) {
            return new Class6($container->get(Class5::class));
        });

        $container->prototypeFactory(Class7::class, static function (Container $container) {
            return new Class7($container->get(Class6::class));
        });

        $container->prototypeFactory(Class8::class, static function (Container $container) {
            return new Class8($container->get(Class7::class));
        });

        $container->prototypeFactory(Class9::class, static function (Container $container) {
            return new Class9($container->get(Class8::class));
        });

        $container->prototypeFactory(Class10::class, static function (Container $container) {
            return new Class10($container->get(Class9::class));
        });

        $container->prototypeFactory(Class11::class, static function (Container $container) {
            return new Class11($container->get(Class10::class));
        });

        $container->prototypeFactory(Class12::class, static function (Container $container) {
            return new Class12($container->get(Class11::class));
        });

        $container->prototypeFactory(Class13::class, static function (Container $container) {
            return new Class13($container->get(Class12::class));
        });

        $container->prototypeFactory(Class14::class, static function (Container $container) {
            return new Class14($container->get(Class13::class));
        });

        $container->prototypeFactory(Class15::class, static function (Container $container) {
            return new Class15($container->get(Class14::class));
        });

        $container->prototypeFactory(Class16::class, static function (Container $container) {
            return new Class16($container->get(Class15::class));
        });

        $container->prototypeFactory(Class17::class, static function (Container $container) {
            return new Class17($container->get(Class16::class));
        });

        $container->prototypeFactory(Class18::class, static function (Container $container) {
            return new Class18($container->get(Class17::class));
        });

        $container->prototypeFactory(Class19::class, static function (Container $container) {
            return new Class19($container->get(Class18::class));
        });

        $container->prototypeFactory(Class20::class, static function (Container $container) {
            return new Class20($container->get(Class19::class));
        });

        $container->prototypeFactory(Class21::class, static function (Container $container) {
            return new Class21($container->get(Class20::class));
        });

        $container->prototypeFactory(Class22::class, static function (Container $container) {
            return new Class22($container->get(Class21::class));
        });

        $container->prototypeFactory(Class23::class, static function (Container $container) {
            return new Class23($container->get(Class22::class));
        });

        $container->prototypeFactory(Class24::class, static function (Container $container) {
            return new Class24($container->get(Class23::class));
        });

        $container->prototypeFactory(Class25::class, static function (Container $container) {
            return new Class25($container->get(Class24::class));
        });

        $container->prototypeFactory(Class26::class, static function (Container $container) {
            return new Class26($container->get(Class25::class));
        });

        $container->prototypeFactory(Class27::class, static function (Container $container) {
            return new Class27($container->get(Class26::class));
        });

        $container->prototypeFactory(Class28::class, static function (Container $container) {
            return new Class28($container->get(Class27::class));
        });

        $container->prototypeFactory(Class29::class, static function (Container $container) {
            return new Class29($container->get(Class28::class));
        });

        $container->prototypeFactory(Class30::class, static function (Container $container) {
            return new Class30($container->get(Class29::class));
        });

        $container->prototypeFactory(Class31::class, static function (Container $container) {
            return new Class31($container->get(Class30::class));
        });

        $container->prototypeFactory(Class32::class, static function (Container $container) {
            return new Class32($container->get(Class31::class));
        });

        $container->prototypeFactory(Class33::class, static function (Container $container) {
            return new Class33($container->get(Class32::class));
        });

        $container->prototypeFactory(Class34::class, static function (Container $container) {
            return new Class34($container->get(Class33::class));
        });

        $container->prototypeFactory(Class35::class, static function (Container $container) {
            return new Class35($container->get(Class34::class));
        });

        $container->prototypeFactory(Class36::class, static function (Container $container) {
            return new Class36($container->get(Class35::class));
        });

        $container->prototypeFactory(Class37::class, static function (Container $container) {
            return new Class37($container->get(Class36::class));
        });

        $container->prototypeFactory(Class38::class, static function (Container $container) {
            return new Class38($container->get(Class37::class));
        });

        $container->prototypeFactory(Class39::class, static function (Container $container) {
            return new Class39($container->get(Class38::class));
        });

        $container->prototypeFactory(Class40::class, static function (Container $container) {
            return new Class40($container->get(Class39::class));
        });

        $container->prototypeFactory(Class41::class, static function (Container $container) {
            return new Class41($container->get(Class40::class));
        });

        $container->prototypeFactory(Class42::class, static function (Container $container) {
            return new Class42($container->get(Class41::class));
        });

        $container->prototypeFactory(Class43::class, static function (Container $container) {
            return new Class43($container->get(Class42::class));
        });

        $container->prototypeFactory(Class44::class, static function (Container $container) {
            return new Class44($container->get(Class43::class));
        });

        $container->prototypeFactory(Class45::class, static function (Container $container) {
            return new Class45($container->get(Class44::class));
        });

        $container->prototypeFactory(Class46::class, static function (Container $container) {
            return new Class46($container->get(Class45::class));
        });

        $container->prototypeFactory(Class47::class, static function (Container $container) {
            return new Class47($container->get(Class46::class));
        });

        $container->prototypeFactory(Class48::class, static function (Container $container) {
            return new Class48($container->get(Class47::class));
        });

        $container->prototypeFactory(Class49::class, static function (Container $container) {
            return new Class49($container->get(Class48::class));
        });

        $container->prototypeFactory(Class50::class, static function (Container $container) {
            return new Class50($container->get(Class49::class));
        });

        $container->prototypeFactory(Class51::class, static function (Container $container) {
            return new Class51($container->get(Class50::class));
        });

        $container->prototypeFactory(Class52::class, static function (Container $container) {
            return new Class52($container->get(Class51::class));
        });

        $container->prototypeFactory(Class53::class, static function (Container $container) {
            return new Class53($container->get(Class52::class));
        });

        $container->prototypeFactory(Class54::class, static function (Container $container) {
            return new Class54($container->get(Class53::class));
        });

        $container->prototypeFactory(Class55::class, static function (Container $container) {
            return new Class55($container->get(Class54::class));
        });

        $container->prototypeFactory(Class56::class, static function (Container $container) {
            return new Class56($container->get(Class55::class));
        });

        $container->prototypeFactory(Class57::class, static function (Container $container) {
            return new Class57($container->get(Class56::class));
        });

        $container->prototypeFactory(Class58::class, static function (Container $container) {
            return new Class58($container->get(Class57::class));
        });

        $container->prototypeFactory(Class59::class, static function (Container $container) {
            return new Class59($container->get(Class58::class));
        });

        $container->prototypeFactory(Class60::class, static function (Container $container) {
            return new Class60($container->get(Class59::class));
        });

        $container->prototypeFactory(Class61::class, static function (Container $container) {
            return new Class61($container->get(Class60::class));
        });

        $container->prototypeFactory(Class62::class, static function (Container $container) {
            return new Class62($container->get(Class61::class));
        });

        $container->prototypeFactory(Class63::class, static function (Container $container) {
            return new Class63($container->get(Class62::class));
        });

        $container->prototypeFactory(Class64::class, static function (Container $container) {
            return new Class64($container->get(Class63::class));
        });

        $container->prototypeFactory(Class65::class, static function (Container $container) {
            return new Class65($container->get(Class64::class));
        });

        $container->prototypeFactory(Class66::class, static function (Container $container) {
            return new Class66($container->get(Class65::class));
        });

        $container->prototypeFactory(Class67::class, static function (Container $container) {
            return new Class67($container->get(Class66::class));
        });

        $container->prototypeFactory(Class68::class, static function (Container $container) {
            return new Class68($container->get(Class67::class));
        });

        $container->prototypeFactory(Class69::class, static function (Container $container) {
            return new Class69($container->get(Class68::class));
        });

        $container->prototypeFactory(Class70::class, static function (Container $container) {
            return new Class70($container->get(Class69::class));
        });

        $container->prototypeFactory(Class71::class, static function (Container $container) {
            return new Class71($container->get(Class70::class));
        });

        $container->prototypeFactory(Class72::class, static function (Container $container) {
            return new Class72($container->get(Class71::class));
        });

        $container->prototypeFactory(Class73::class, static function (Container $container) {
            return new Class73($container->get(Class72::class));
        });

        $container->prototypeFactory(Class74::class, static function (Container $container) {
            return new Class74($container->get(Class73::class));
        });

        $container->prototypeFactory(Class75::class, static function (Container $container) {
            return new Class75($container->get(Class74::class));
        });

        $container->prototypeFactory(Class76::class, static function (Container $container) {
            return new Class76($container->get(Class75::class));
        });

        $container->prototypeFactory(Class77::class, static function (Container $container) {
            return new Class77($container->get(Class76::class));
        });

        $container->prototypeFactory(Class78::class, static function (Container $container) {
            return new Class78($container->get(Class77::class));
        });

        $container->prototypeFactory(Class79::class, static function (Container $container) {
            return new Class79($container->get(Class78::class));
        });

        $container->prototypeFactory(Class80::class, static function (Container $container) {
            return new Class80($container->get(Class79::class));
        });

        $container->prototypeFactory(Class81::class, static function (Container $container) {
            return new Class81($container->get(Class80::class));
        });

        $container->prototypeFactory(Class82::class, static function (Container $container) {
            return new Class82($container->get(Class81::class));
        });

        $container->prototypeFactory(Class83::class, static function (Container $container) {
            return new Class83($container->get(Class82::class));
        });

        $container->prototypeFactory(Class84::class, static function (Container $container) {
            return new Class84($container->get(Class83::class));
        });

        $container->prototypeFactory(Class85::class, static function (Container $container) {
            return new Class85($container->get(Class84::class));
        });

        $container->prototypeFactory(Class86::class, static function (Container $container) {
            return new Class86($container->get(Class85::class));
        });

        $container->prototypeFactory(Class87::class, static function (Container $container) {
            return new Class87($container->get(Class86::class));
        });

        $container->prototypeFactory(Class88::class, static function (Container $container) {
            return new Class88($container->get(Class87::class));
        });

        $container->prototypeFactory(Class89::class, static function (Container $container) {
            return new Class89($container->get(Class88::class));
        });

        $container->prototypeFactory(Class90::class, static function (Container $container) {
            return new Class90($container->get(Class89::class));
        });

        $container->prototypeFactory(Class91::class, static function (Container $container) {
            return new Class91($container->get(Class90::class));
        });

        $container->prototypeFactory(Class92::class, static function (Container $container) {
            return new Class92($container->get(Class91::class));
        });

        $container->prototypeFactory(Class93::class, static function (Container $container) {
            return new Class93($container->get(Class92::class));
        });

        $container->prototypeFactory(Class94::class, static function (Container $container) {
            return new Class94($container->get(Class93::class));
        });

        $container->prototypeFactory(Class95::class, static function (Container $container) {
            return new Class95($container->get(Class94::class));
        });

        $container->prototypeFactory(Class96::class, static function (Container $container) {
            return new Class96($container->get(Class95::class));
        });

        $container->prototypeFactory(Class97::class, static function (Container $container) {
            return new Class97($container->get(Class96::class));
        });

        $container->prototypeFactory(Class98::class, static function (Container $container) {
            return new Class98($container->get(Class97::class));
        });

        $container->prototypeFactory(Class99::class, static function (Container $container) {
            return new Class99($container->get(Class98::class));
        });

        $container->prototypeFactory(Class100::class, static function (Container $container) {
            return new Class100($container->get(Class99::class));
        });

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
           }

           for ($i = 1; $i <= 100; $i++) {
               echo "\$container->factory(Class" . $i . "::class, static function (Container \$container) {\n";
               echo "    return new Class" . $i . "(\$container->get(Class" . ($i-1) . "::class));\n";
               echo "});\n\n";
           }
        */
        $container = new Container();

        $container->factory(Class1::class, static function () {
            return new Class1();
        });

        $container->factory(Class2::class, static function (Container $container) {
            return new Class2($container->get(Class1::class));
        });

        $container->factory(Class3::class, static function (Container $container) {
            return new Class3($container->get(Class2::class));
        });

        $container->factory(Class4::class, static function (Container $container) {
            return new Class4($container->get(Class3::class));
        });

        $container->factory(Class5::class, static function (Container $container) {
            return new Class5($container->get(Class4::class));
        });

        $container->factory(Class6::class, static function (Container $container) {
            return new Class6($container->get(Class5::class));
        });

        $container->factory(Class7::class, static function (Container $container) {
            return new Class7($container->get(Class6::class));
        });

        $container->factory(Class8::class, static function (Container $container) {
            return new Class8($container->get(Class7::class));
        });

        $container->factory(Class9::class, static function (Container $container) {
            return new Class9($container->get(Class8::class));
        });

        $container->factory(Class10::class, static function (Container $container) {
            return new Class10($container->get(Class9::class));
        });

        $container->factory(Class11::class, static function (Container $container) {
            return new Class11($container->get(Class10::class));
        });

        $container->factory(Class12::class, static function (Container $container) {
            return new Class12($container->get(Class11::class));
        });

        $container->factory(Class13::class, static function (Container $container) {
            return new Class13($container->get(Class12::class));
        });

        $container->factory(Class14::class, static function (Container $container) {
            return new Class14($container->get(Class13::class));
        });

        $container->factory(Class15::class, static function (Container $container) {
            return new Class15($container->get(Class14::class));
        });

        $container->factory(Class16::class, static function (Container $container) {
            return new Class16($container->get(Class15::class));
        });

        $container->factory(Class17::class, static function (Container $container) {
            return new Class17($container->get(Class16::class));
        });

        $container->factory(Class18::class, static function (Container $container) {
            return new Class18($container->get(Class17::class));
        });

        $container->factory(Class19::class, static function (Container $container) {
            return new Class19($container->get(Class18::class));
        });

        $container->factory(Class20::class, static function (Container $container) {
            return new Class20($container->get(Class19::class));
        });

        $container->factory(Class21::class, static function (Container $container) {
            return new Class21($container->get(Class20::class));
        });

        $container->factory(Class22::class, static function (Container $container) {
            return new Class22($container->get(Class21::class));
        });

        $container->factory(Class23::class, static function (Container $container) {
            return new Class23($container->get(Class22::class));
        });

        $container->factory(Class24::class, static function (Container $container) {
            return new Class24($container->get(Class23::class));
        });

        $container->factory(Class25::class, static function (Container $container) {
            return new Class25($container->get(Class24::class));
        });

        $container->factory(Class26::class, static function (Container $container) {
            return new Class26($container->get(Class25::class));
        });

        $container->factory(Class27::class, static function (Container $container) {
            return new Class27($container->get(Class26::class));
        });

        $container->factory(Class28::class, static function (Container $container) {
            return new Class28($container->get(Class27::class));
        });

        $container->factory(Class29::class, static function (Container $container) {
            return new Class29($container->get(Class28::class));
        });

        $container->factory(Class30::class, static function (Container $container) {
            return new Class30($container->get(Class29::class));
        });

        $container->factory(Class31::class, static function (Container $container) {
            return new Class31($container->get(Class30::class));
        });

        $container->factory(Class32::class, static function (Container $container) {
            return new Class32($container->get(Class31::class));
        });

        $container->factory(Class33::class, static function (Container $container) {
            return new Class33($container->get(Class32::class));
        });

        $container->factory(Class34::class, static function (Container $container) {
            return new Class34($container->get(Class33::class));
        });

        $container->factory(Class35::class, static function (Container $container) {
            return new Class35($container->get(Class34::class));
        });

        $container->factory(Class36::class, static function (Container $container) {
            return new Class36($container->get(Class35::class));
        });

        $container->factory(Class37::class, static function (Container $container) {
            return new Class37($container->get(Class36::class));
        });

        $container->factory(Class38::class, static function (Container $container) {
            return new Class38($container->get(Class37::class));
        });

        $container->factory(Class39::class, static function (Container $container) {
            return new Class39($container->get(Class38::class));
        });

        $container->factory(Class40::class, static function (Container $container) {
            return new Class40($container->get(Class39::class));
        });

        $container->factory(Class41::class, static function (Container $container) {
            return new Class41($container->get(Class40::class));
        });

        $container->factory(Class42::class, static function (Container $container) {
            return new Class42($container->get(Class41::class));
        });

        $container->factory(Class43::class, static function (Container $container) {
            return new Class43($container->get(Class42::class));
        });

        $container->factory(Class44::class, static function (Container $container) {
            return new Class44($container->get(Class43::class));
        });

        $container->factory(Class45::class, static function (Container $container) {
            return new Class45($container->get(Class44::class));
        });

        $container->factory(Class46::class, static function (Container $container) {
            return new Class46($container->get(Class45::class));
        });

        $container->factory(Class47::class, static function (Container $container) {
            return new Class47($container->get(Class46::class));
        });

        $container->factory(Class48::class, static function (Container $container) {
            return new Class48($container->get(Class47::class));
        });

        $container->factory(Class49::class, static function (Container $container) {
            return new Class49($container->get(Class48::class));
        });

        $container->factory(Class50::class, static function (Container $container) {
            return new Class50($container->get(Class49::class));
        });

        $container->factory(Class51::class, static function (Container $container) {
            return new Class51($container->get(Class50::class));
        });

        $container->factory(Class52::class, static function (Container $container) {
            return new Class52($container->get(Class51::class));
        });

        $container->factory(Class53::class, static function (Container $container) {
            return new Class53($container->get(Class52::class));
        });

        $container->factory(Class54::class, static function (Container $container) {
            return new Class54($container->get(Class53::class));
        });

        $container->factory(Class55::class, static function (Container $container) {
            return new Class55($container->get(Class54::class));
        });

        $container->factory(Class56::class, static function (Container $container) {
            return new Class56($container->get(Class55::class));
        });

        $container->factory(Class57::class, static function (Container $container) {
            return new Class57($container->get(Class56::class));
        });

        $container->factory(Class58::class, static function (Container $container) {
            return new Class58($container->get(Class57::class));
        });

        $container->factory(Class59::class, static function (Container $container) {
            return new Class59($container->get(Class58::class));
        });

        $container->factory(Class60::class, static function (Container $container) {
            return new Class60($container->get(Class59::class));
        });

        $container->factory(Class61::class, static function (Container $container) {
            return new Class61($container->get(Class60::class));
        });

        $container->factory(Class62::class, static function (Container $container) {
            return new Class62($container->get(Class61::class));
        });

        $container->factory(Class63::class, static function (Container $container) {
            return new Class63($container->get(Class62::class));
        });

        $container->factory(Class64::class, static function (Container $container) {
            return new Class64($container->get(Class63::class));
        });

        $container->factory(Class65::class, static function (Container $container) {
            return new Class65($container->get(Class64::class));
        });

        $container->factory(Class66::class, static function (Container $container) {
            return new Class66($container->get(Class65::class));
        });

        $container->factory(Class67::class, static function (Container $container) {
            return new Class67($container->get(Class66::class));
        });

        $container->factory(Class68::class, static function (Container $container) {
            return new Class68($container->get(Class67::class));
        });

        $container->factory(Class69::class, static function (Container $container) {
            return new Class69($container->get(Class68::class));
        });

        $container->factory(Class70::class, static function (Container $container) {
            return new Class70($container->get(Class69::class));
        });

        $container->factory(Class71::class, static function (Container $container) {
            return new Class71($container->get(Class70::class));
        });

        $container->factory(Class72::class, static function (Container $container) {
            return new Class72($container->get(Class71::class));
        });

        $container->factory(Class73::class, static function (Container $container) {
            return new Class73($container->get(Class72::class));
        });

        $container->factory(Class74::class, static function (Container $container) {
            return new Class74($container->get(Class73::class));
        });

        $container->factory(Class75::class, static function (Container $container) {
            return new Class75($container->get(Class74::class));
        });

        $container->factory(Class76::class, static function (Container $container) {
            return new Class76($container->get(Class75::class));
        });

        $container->factory(Class77::class, static function (Container $container) {
            return new Class77($container->get(Class76::class));
        });

        $container->factory(Class78::class, static function (Container $container) {
            return new Class78($container->get(Class77::class));
        });

        $container->factory(Class79::class, static function (Container $container) {
            return new Class79($container->get(Class78::class));
        });

        $container->factory(Class80::class, static function (Container $container) {
            return new Class80($container->get(Class79::class));
        });

        $container->factory(Class81::class, static function (Container $container) {
            return new Class81($container->get(Class80::class));
        });

        $container->factory(Class82::class, static function (Container $container) {
            return new Class82($container->get(Class81::class));
        });

        $container->factory(Class83::class, static function (Container $container) {
            return new Class83($container->get(Class82::class));
        });

        $container->factory(Class84::class, static function (Container $container) {
            return new Class84($container->get(Class83::class));
        });

        $container->factory(Class85::class, static function (Container $container) {
            return new Class85($container->get(Class84::class));
        });

        $container->factory(Class86::class, static function (Container $container) {
            return new Class86($container->get(Class85::class));
        });

        $container->factory(Class87::class, static function (Container $container) {
            return new Class87($container->get(Class86::class));
        });

        $container->factory(Class88::class, static function (Container $container) {
            return new Class88($container->get(Class87::class));
        });

        $container->factory(Class89::class, static function (Container $container) {
            return new Class89($container->get(Class88::class));
        });

        $container->factory(Class90::class, static function (Container $container) {
            return new Class90($container->get(Class89::class));
        });

        $container->factory(Class91::class, static function (Container $container) {
            return new Class91($container->get(Class90::class));
        });

        $container->factory(Class92::class, static function (Container $container) {
            return new Class92($container->get(Class91::class));
        });

        $container->factory(Class93::class, static function (Container $container) {
            return new Class93($container->get(Class92::class));
        });

        $container->factory(Class94::class, static function (Container $container) {
            return new Class94($container->get(Class93::class));
        });

        $container->factory(Class95::class, static function (Container $container) {
            return new Class95($container->get(Class94::class));
        });

        $container->factory(Class96::class, static function (Container $container) {
            return new Class96($container->get(Class95::class));
        });

        $container->factory(Class97::class, static function (Container $container) {
            return new Class97($container->get(Class96::class));
        });

        $container->factory(Class98::class, static function (Container $container) {
            return new Class98($container->get(Class97::class));
        });

        $container->factory(Class99::class, static function (Container $container) {
            return new Class99($container->get(Class98::class));
        });

        $container->factory(Class100::class, static function (Container $container) {
            return new Class100($container->get(Class99::class));
        });

        $this->container = $container;
    }
}
