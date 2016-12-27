<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

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
use Pimple\Container;

abstract class AbstractPimpleTest implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    public function startup(): void
    {
        // Generated with:
        // for ($i = 1; $i <= 100; $i++) {
        //   echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
        // }
        //
        // for ($i = 1; $i <= 100; $i++) {
        //   echo "\$container[Class" . $i . "::class] = function (\$container) {\n";
        //   echo "    return new Class" . $i . "(\$container[Class" . ($i-1) . "::class]);\n";
        //   echo "};\n\n";
        // }

        $container = new Container();

        $container[Class1::class] = function ($container) {
            return new Class1();
        };

        $container[Class2::class] = function ($container) {
            return new Class2($container[Class1::class]);
        };

        $container[Class3::class] = function ($container) {
            return new Class3($container[Class2::class]);
        };

        $container[Class4::class] = function ($container) {
            return new Class4($container[Class3::class]);
        };

        $container[Class5::class] = function ($container) {
            return new Class5($container[Class4::class]);
        };

        $container[Class6::class] = function ($container) {
            return new Class6($container[Class5::class]);
        };

        $container[Class7::class] = function ($container) {
            return new Class7($container[Class6::class]);
        };

        $container[Class8::class] = function ($container) {
            return new Class8($container[Class7::class]);
        };

        $container[Class9::class] = function ($container) {
            return new Class9($container[Class8::class]);
        };

        $container[Class10::class] = function ($container) {
            return new Class10($container[Class9::class]);
        };

        $container[Class11::class] = function ($container) {
            return new Class11($container[Class10::class]);
        };

        $container[Class12::class] = function ($container) {
            return new Class12($container[Class11::class]);
        };

        $container[Class13::class] = function ($container) {
            return new Class13($container[Class12::class]);
        };

        $container[Class14::class] = function ($container) {
            return new Class14($container[Class13::class]);
        };

        $container[Class15::class] = function ($container) {
            return new Class15($container[Class14::class]);
        };

        $container[Class16::class] = function ($container) {
            return new Class16($container[Class15::class]);
        };

        $container[Class17::class] = function ($container) {
            return new Class17($container[Class16::class]);
        };

        $container[Class18::class] = function ($container) {
            return new Class18($container[Class17::class]);
        };

        $container[Class19::class] = function ($container) {
            return new Class19($container[Class18::class]);
        };

        $container[Class20::class] = function ($container) {
            return new Class20($container[Class19::class]);
        };

        $container[Class21::class] = function ($container) {
            return new Class21($container[Class20::class]);
        };

        $container[Class22::class] = function ($container) {
            return new Class22($container[Class21::class]);
        };

        $container[Class23::class] = function ($container) {
            return new Class23($container[Class22::class]);
        };

        $container[Class24::class] = function ($container) {
            return new Class24($container[Class23::class]);
        };

        $container[Class25::class] = function ($container) {
            return new Class25($container[Class24::class]);
        };

        $container[Class26::class] = function ($container) {
            return new Class26($container[Class25::class]);
        };

        $container[Class27::class] = function ($container) {
            return new Class27($container[Class26::class]);
        };

        $container[Class28::class] = function ($container) {
            return new Class28($container[Class27::class]);
        };

        $container[Class29::class] = function ($container) {
            return new Class29($container[Class28::class]);
        };

        $container[Class30::class] = function ($container) {
            return new Class30($container[Class29::class]);
        };

        $container[Class31::class] = function ($container) {
            return new Class31($container[Class30::class]);
        };

        $container[Class32::class] = function ($container) {
            return new Class32($container[Class31::class]);
        };

        $container[Class33::class] = function ($container) {
            return new Class33($container[Class32::class]);
        };

        $container[Class34::class] = function ($container) {
            return new Class34($container[Class33::class]);
        };

        $container[Class35::class] = function ($container) {
            return new Class35($container[Class34::class]);
        };

        $container[Class36::class] = function ($container) {
            return new Class36($container[Class35::class]);
        };

        $container[Class37::class] = function ($container) {
            return new Class37($container[Class36::class]);
        };

        $container[Class38::class] = function ($container) {
            return new Class38($container[Class37::class]);
        };

        $container[Class39::class] = function ($container) {
            return new Class39($container[Class38::class]);
        };

        $container[Class40::class] = function ($container) {
            return new Class40($container[Class39::class]);
        };

        $container[Class41::class] = function ($container) {
            return new Class41($container[Class40::class]);
        };

        $container[Class42::class] = function ($container) {
            return new Class42($container[Class41::class]);
        };

        $container[Class43::class] = function ($container) {
            return new Class43($container[Class42::class]);
        };

        $container[Class44::class] = function ($container) {
            return new Class44($container[Class43::class]);
        };

        $container[Class45::class] = function ($container) {
            return new Class45($container[Class44::class]);
        };

        $container[Class46::class] = function ($container) {
            return new Class46($container[Class45::class]);
        };

        $container[Class47::class] = function ($container) {
            return new Class47($container[Class46::class]);
        };

        $container[Class48::class] = function ($container) {
            return new Class48($container[Class47::class]);
        };

        $container[Class49::class] = function ($container) {
            return new Class49($container[Class48::class]);
        };

        $container[Class50::class] = function ($container) {
            return new Class50($container[Class49::class]);
        };

        $container[Class51::class] = function ($container) {
            return new Class51($container[Class50::class]);
        };

        $container[Class52::class] = function ($container) {
            return new Class52($container[Class51::class]);
        };

        $container[Class53::class] = function ($container) {
            return new Class53($container[Class52::class]);
        };

        $container[Class54::class] = function ($container) {
            return new Class54($container[Class53::class]);
        };

        $container[Class55::class] = function ($container) {
            return new Class55($container[Class54::class]);
        };

        $container[Class56::class] = function ($container) {
            return new Class56($container[Class55::class]);
        };

        $container[Class57::class] = function ($container) {
            return new Class57($container[Class56::class]);
        };

        $container[Class58::class] = function ($container) {
            return new Class58($container[Class57::class]);
        };

        $container[Class59::class] = function ($container) {
            return new Class59($container[Class58::class]);
        };

        $container[Class60::class] = function ($container) {
            return new Class60($container[Class59::class]);
        };

        $container[Class61::class] = function ($container) {
            return new Class61($container[Class60::class]);
        };

        $container[Class62::class] = function ($container) {
            return new Class62($container[Class61::class]);
        };

        $container[Class63::class] = function ($container) {
            return new Class63($container[Class62::class]);
        };

        $container[Class64::class] = function ($container) {
            return new Class64($container[Class63::class]);
        };

        $container[Class65::class] = function ($container) {
            return new Class65($container[Class64::class]);
        };

        $container[Class66::class] = function ($container) {
            return new Class66($container[Class65::class]);
        };

        $container[Class67::class] = function ($container) {
            return new Class67($container[Class66::class]);
        };

        $container[Class68::class] = function ($container) {
            return new Class68($container[Class67::class]);
        };

        $container[Class69::class] = function ($container) {
            return new Class69($container[Class68::class]);
        };

        $container[Class70::class] = function ($container) {
            return new Class70($container[Class69::class]);
        };

        $container[Class71::class] = function ($container) {
            return new Class71($container[Class70::class]);
        };

        $container[Class72::class] = function ($container) {
            return new Class72($container[Class71::class]);
        };

        $container[Class73::class] = function ($container) {
            return new Class73($container[Class72::class]);
        };

        $container[Class74::class] = function ($container) {
            return new Class74($container[Class73::class]);
        };

        $container[Class75::class] = function ($container) {
            return new Class75($container[Class74::class]);
        };

        $container[Class76::class] = function ($container) {
            return new Class76($container[Class75::class]);
        };

        $container[Class77::class] = function ($container) {
            return new Class77($container[Class76::class]);
        };

        $container[Class78::class] = function ($container) {
            return new Class78($container[Class77::class]);
        };

        $container[Class79::class] = function ($container) {
            return new Class79($container[Class78::class]);
        };

        $container[Class80::class] = function ($container) {
            return new Class80($container[Class79::class]);
        };

        $container[Class81::class] = function ($container) {
            return new Class81($container[Class80::class]);
        };

        $container[Class82::class] = function ($container) {
            return new Class82($container[Class81::class]);
        };

        $container[Class83::class] = function ($container) {
            return new Class83($container[Class82::class]);
        };

        $container[Class84::class] = function ($container) {
            return new Class84($container[Class83::class]);
        };

        $container[Class85::class] = function ($container) {
            return new Class85($container[Class84::class]);
        };

        $container[Class86::class] = function ($container) {
            return new Class86($container[Class85::class]);
        };

        $container[Class87::class] = function ($container) {
            return new Class87($container[Class86::class]);
        };

        $container[Class88::class] = function ($container) {
            return new Class88($container[Class87::class]);
        };

        $container[Class89::class] = function ($container) {
            return new Class89($container[Class88::class]);
        };

        $container[Class90::class] = function ($container) {
            return new Class90($container[Class89::class]);
        };

        $container[Class91::class] = function ($container) {
            return new Class91($container[Class90::class]);
        };

        $container[Class92::class] = function ($container) {
            return new Class92($container[Class91::class]);
        };

        $container[Class93::class] = function ($container) {
            return new Class93($container[Class92::class]);
        };

        $container[Class94::class] = function ($container) {
            return new Class94($container[Class93::class]);
        };

        $container[Class95::class] = function ($container) {
            return new Class95($container[Class94::class]);
        };

        $container[Class96::class] = function ($container) {
            return new Class96($container[Class95::class]);
        };

        $container[Class97::class] = function ($container) {
            return new Class97($container[Class96::class]);
        };

        $container[Class98::class] = function ($container) {
            return new Class98($container[Class97::class]);
        };

        $container[Class99::class] = function ($container) {
            return new Class99($container[Class98::class]);
        };

        $container[Class100::class] = function ($container) {
            return new Class100($container[Class99::class]);
        };

        $this->container = $container;
    }
}
