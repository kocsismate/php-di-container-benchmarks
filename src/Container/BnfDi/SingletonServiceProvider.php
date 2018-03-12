<?php
declare(strict_types=1);
namespace DiContainerBenchmarks\Container\BnfDi;

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
use Interop\Container\ServiceProviderInterface;

class SingletonServiceProvider implements ServiceProviderInterface
{
    public function getFactories()
    {
        return [
            Class1::class => [ self::class, 'getClass1' ],
            Class2::class => [ self::class, 'getClass2' ],
            Class3::class => [ self::class, 'getClass3' ],
            Class4::class => [ self::class, 'getClass4' ],
            Class5::class => [ self::class, 'getClass5' ],
            Class6::class => [ self::class, 'getClass6' ],
            Class7::class => [ self::class, 'getClass7' ],
            Class8::class => [ self::class, 'getClass8' ],
            Class9::class => [ self::class, 'getClass9' ],
            Class10::class => [ self::class, 'getClass10' ],
            Class11::class => [ self::class, 'getClass11' ],
            Class12::class => [ self::class, 'getClass12' ],
            Class13::class => [ self::class, 'getClass13' ],
            Class14::class => [ self::class, 'getClass14' ],
            Class15::class => [ self::class, 'getClass15' ],
            Class16::class => [ self::class, 'getClass16' ],
            Class17::class => [ self::class, 'getClass17' ],
            Class18::class => [ self::class, 'getClass18' ],
            Class19::class => [ self::class, 'getClass19' ],
            Class20::class => [ self::class, 'getClass20' ],
            Class21::class => [ self::class, 'getClass21' ],
            Class22::class => [ self::class, 'getClass22' ],
            Class23::class => [ self::class, 'getClass23' ],
            Class24::class => [ self::class, 'getClass24' ],
            Class25::class => [ self::class, 'getClass25' ],
            Class26::class => [ self::class, 'getClass26' ],
            Class27::class => [ self::class, 'getClass27' ],
            Class28::class => [ self::class, 'getClass28' ],
            Class29::class => [ self::class, 'getClass29' ],
            Class30::class => [ self::class, 'getClass30' ],
            Class31::class => [ self::class, 'getClass31' ],
            Class32::class => [ self::class, 'getClass32' ],
            Class33::class => [ self::class, 'getClass33' ],
            Class34::class => [ self::class, 'getClass34' ],
            Class35::class => [ self::class, 'getClass35' ],
            Class36::class => [ self::class, 'getClass36' ],
            Class37::class => [ self::class, 'getClass37' ],
            Class38::class => [ self::class, 'getClass38' ],
            Class39::class => [ self::class, 'getClass39' ],
            Class40::class => [ self::class, 'getClass40' ],
            Class41::class => [ self::class, 'getClass41' ],
            Class42::class => [ self::class, 'getClass42' ],
            Class43::class => [ self::class, 'getClass43' ],
            Class44::class => [ self::class, 'getClass44' ],
            Class45::class => [ self::class, 'getClass45' ],
            Class46::class => [ self::class, 'getClass46' ],
            Class47::class => [ self::class, 'getClass47' ],
            Class48::class => [ self::class, 'getClass48' ],
            Class49::class => [ self::class, 'getClass49' ],
            Class50::class => [ self::class, 'getClass50' ],
            Class51::class => [ self::class, 'getClass51' ],
            Class52::class => [ self::class, 'getClass52' ],
            Class53::class => [ self::class, 'getClass53' ],
            Class54::class => [ self::class, 'getClass54' ],
            Class55::class => [ self::class, 'getClass55' ],
            Class56::class => [ self::class, 'getClass56' ],
            Class57::class => [ self::class, 'getClass57' ],
            Class58::class => [ self::class, 'getClass58' ],
            Class59::class => [ self::class, 'getClass59' ],
            Class60::class => [ self::class, 'getClass60' ],
            Class61::class => [ self::class, 'getClass61' ],
            Class62::class => [ self::class, 'getClass62' ],
            Class63::class => [ self::class, 'getClass63' ],
            Class64::class => [ self::class, 'getClass64' ],
            Class65::class => [ self::class, 'getClass65' ],
            Class66::class => [ self::class, 'getClass66' ],
            Class67::class => [ self::class, 'getClass67' ],
            Class68::class => [ self::class, 'getClass68' ],
            Class69::class => [ self::class, 'getClass69' ],
            Class70::class => [ self::class, 'getClass70' ],
            Class71::class => [ self::class, 'getClass71' ],
            Class72::class => [ self::class, 'getClass72' ],
            Class73::class => [ self::class, 'getClass73' ],
            Class74::class => [ self::class, 'getClass74' ],
            Class75::class => [ self::class, 'getClass75' ],
            Class76::class => [ self::class, 'getClass76' ],
            Class77::class => [ self::class, 'getClass77' ],
            Class78::class => [ self::class, 'getClass78' ],
            Class79::class => [ self::class, 'getClass79' ],
            Class80::class => [ self::class, 'getClass80' ],
            Class81::class => [ self::class, 'getClass81' ],
            Class82::class => [ self::class, 'getClass82' ],
            Class83::class => [ self::class, 'getClass83' ],
            Class84::class => [ self::class, 'getClass84' ],
            Class85::class => [ self::class, 'getClass85' ],
            Class86::class => [ self::class, 'getClass86' ],
            Class87::class => [ self::class, 'getClass87' ],
            Class88::class => [ self::class, 'getClass88' ],
            Class89::class => [ self::class, 'getClass89' ],
            Class90::class => [ self::class, 'getClass90' ],
            Class91::class => [ self::class, 'getClass91' ],
            Class92::class => [ self::class, 'getClass92' ],
            Class93::class => [ self::class, 'getClass93' ],
            Class94::class => [ self::class, 'getClass94' ],
            Class95::class => [ self::class, 'getClass95' ],
            Class96::class => [ self::class, 'getClass96' ],
            Class97::class => [ self::class, 'getClass97' ],
            Class98::class => [ self::class, 'getClass98' ],
            Class99::class => [ self::class, 'getClass99' ],
            Class100::class => [ self::class, 'getClass100' ],
        ];
    }

    public function getExtensions()
    {
        return [];
    }

    public static function getClass1()
    {
        return new Class1;
    }
    public static function getClass2($container)
    {
        return new Class2($container->get(Class1::class));
    }
    public static function getClass3($container)
    {
        return new Class3($container->get(Class2::class));
    }
    public static function getClass4($container)
    {
        return new Class4($container->get(Class3::class));
    }
    public static function getClass5($container)
    {
        return new Class5($container->get(Class4::class));
    }
    public static function getClass6($container)
    {
        return new Class6($container->get(Class5::class));
    }
    public static function getClass7($container)
    {
        return new Class7($container->get(Class6::class));
    }
    public static function getClass8($container)
    {
        return new Class8($container->get(Class7::class));
    }
    public static function getClass9($container)
    {
        return new Class9($container->get(Class8::class));
    }
    public static function getClass10($container)
    {
        return new Class10($container->get(Class9::class));
    }
    public static function getClass11($container)
    {
        return new Class11($container->get(Class10::class));
    }
    public static function getClass12($container)
    {
        return new Class12($container->get(Class11::class));
    }
    public static function getClass13($container)
    {
        return new Class13($container->get(Class12::class));
    }
    public static function getClass14($container)
    {
        return new Class14($container->get(Class13::class));
    }
    public static function getClass15($container)
    {
        return new Class15($container->get(Class14::class));
    }
    public static function getClass16($container)
    {
        return new Class16($container->get(Class15::class));
    }
    public static function getClass17($container)
    {
        return new Class17($container->get(Class16::class));
    }
    public static function getClass18($container)
    {
        return new Class18($container->get(Class17::class));
    }
    public static function getClass19($container)
    {
        return new Class19($container->get(Class18::class));
    }
    public static function getClass20($container)
    {
        return new Class20($container->get(Class19::class));
    }
    public static function getClass21($container)
    {
        return new Class21($container->get(Class20::class));
    }
    public static function getClass22($container)
    {
        return new Class22($container->get(Class21::class));
    }
    public static function getClass23($container)
    {
        return new Class23($container->get(Class22::class));
    }
    public static function getClass24($container)
    {
        return new Class24($container->get(Class23::class));
    }
    public static function getClass25($container)
    {
        return new Class25($container->get(Class24::class));
    }
    public static function getClass26($container)
    {
        return new Class26($container->get(Class25::class));
    }
    public static function getClass27($container)
    {
        return new Class27($container->get(Class26::class));
    }
    public static function getClass28($container)
    {
        return new Class28($container->get(Class27::class));
    }
    public static function getClass29($container)
    {
        return new Class29($container->get(Class28::class));
    }
    public static function getClass30($container)
    {
        return new Class30($container->get(Class29::class));
    }
    public static function getClass31($container)
    {
        return new Class31($container->get(Class30::class));
    }
    public static function getClass32($container)
    {
        return new Class32($container->get(Class31::class));
    }
    public static function getClass33($container)
    {
        return new Class33($container->get(Class32::class));
    }
    public static function getClass34($container)
    {
        return new Class34($container->get(Class33::class));
    }
    public static function getClass35($container)
    {
        return new Class35($container->get(Class34::class));
    }
    public static function getClass36($container)
    {
        return new Class36($container->get(Class35::class));
    }
    public static function getClass37($container)
    {
        return new Class37($container->get(Class36::class));
    }
    public static function getClass38($container)
    {
        return new Class38($container->get(Class37::class));
    }
    public static function getClass39($container)
    {
        return new Class39($container->get(Class38::class));
    }
    public static function getClass40($container)
    {
        return new Class40($container->get(Class39::class));
    }
    public static function getClass41($container)
    {
        return new Class41($container->get(Class40::class));
    }
    public static function getClass42($container)
    {
        return new Class42($container->get(Class41::class));
    }
    public static function getClass43($container)
    {
        return new Class43($container->get(Class42::class));
    }
    public static function getClass44($container)
    {
        return new Class44($container->get(Class43::class));
    }
    public static function getClass45($container)
    {
        return new Class45($container->get(Class44::class));
    }
    public static function getClass46($container)
    {
        return new Class46($container->get(Class45::class));
    }
    public static function getClass47($container)
    {
        return new Class47($container->get(Class46::class));
    }
    public static function getClass48($container)
    {
        return new Class48($container->get(Class47::class));
    }
    public static function getClass49($container)
    {
        return new Class49($container->get(Class48::class));
    }
    public static function getClass50($container)
    {
        return new Class50($container->get(Class49::class));
    }
    public static function getClass51($container)
    {
        return new Class51($container->get(Class50::class));
    }
    public static function getClass52($container)
    {
        return new Class52($container->get(Class51::class));
    }
    public static function getClass53($container)
    {
        return new Class53($container->get(Class52::class));
    }
    public static function getClass54($container)
    {
        return new Class54($container->get(Class53::class));
    }
    public static function getClass55($container)
    {
        return new Class55($container->get(Class54::class));
    }
    public static function getClass56($container)
    {
        return new Class56($container->get(Class55::class));
    }
    public static function getClass57($container)
    {
        return new Class57($container->get(Class56::class));
    }
    public static function getClass58($container)
    {
        return new Class58($container->get(Class57::class));
    }
    public static function getClass59($container)
    {
        return new Class59($container->get(Class58::class));
    }
    public static function getClass60($container)
    {
        return new Class60($container->get(Class59::class));
    }
    public static function getClass61($container)
    {
        return new Class61($container->get(Class60::class));
    }
    public static function getClass62($container)
    {
        return new Class62($container->get(Class61::class));
    }
    public static function getClass63($container)
    {
        return new Class63($container->get(Class62::class));
    }
    public static function getClass64($container)
    {
        return new Class64($container->get(Class63::class));
    }
    public static function getClass65($container)
    {
        return new Class65($container->get(Class64::class));
    }
    public static function getClass66($container)
    {
        return new Class66($container->get(Class65::class));
    }
    public static function getClass67($container)
    {
        return new Class67($container->get(Class66::class));
    }
    public static function getClass68($container)
    {
        return new Class68($container->get(Class67::class));
    }
    public static function getClass69($container)
    {
        return new Class69($container->get(Class68::class));
    }
    public static function getClass70($container)
    {
        return new Class70($container->get(Class69::class));
    }
    public static function getClass71($container)
    {
        return new Class71($container->get(Class70::class));
    }
    public static function getClass72($container)
    {
        return new Class72($container->get(Class71::class));
    }
    public static function getClass73($container)
    {
        return new Class73($container->get(Class72::class));
    }
    public static function getClass74($container)
    {
        return new Class74($container->get(Class73::class));
    }
    public static function getClass75($container)
    {
        return new Class75($container->get(Class74::class));
    }
    public static function getClass76($container)
    {
        return new Class76($container->get(Class75::class));
    }
    public static function getClass77($container)
    {
        return new Class77($container->get(Class76::class));
    }
    public static function getClass78($container)
    {
        return new Class78($container->get(Class77::class));
    }
    public static function getClass79($container)
    {
        return new Class79($container->get(Class78::class));
    }
    public static function getClass80($container)
    {
        return new Class80($container->get(Class79::class));
    }
    public static function getClass81($container)
    {
        return new Class81($container->get(Class80::class));
    }
    public static function getClass82($container)
    {
        return new Class82($container->get(Class81::class));
    }
    public static function getClass83($container)
    {
        return new Class83($container->get(Class82::class));
    }
    public static function getClass84($container)
    {
        return new Class84($container->get(Class83::class));
    }
    public static function getClass85($container)
    {
        return new Class85($container->get(Class84::class));
    }
    public static function getClass86($container)
    {
        return new Class86($container->get(Class85::class));
    }
    public static function getClass87($container)
    {
        return new Class87($container->get(Class86::class));
    }
    public static function getClass88($container)
    {
        return new Class88($container->get(Class87::class));
    }
    public static function getClass89($container)
    {
        return new Class89($container->get(Class88::class));
    }
    public static function getClass90($container)
    {
        return new Class90($container->get(Class89::class));
    }
    public static function getClass91($container)
    {
        return new Class91($container->get(Class90::class));
    }
    public static function getClass92($container)
    {
        return new Class92($container->get(Class91::class));
    }
    public static function getClass93($container)
    {
        return new Class93($container->get(Class92::class));
    }
    public static function getClass94($container)
    {
        return new Class94($container->get(Class93::class));
    }
    public static function getClass95($container)
    {
        return new Class95($container->get(Class94::class));
    }
    public static function getClass96($container)
    {
        return new Class96($container->get(Class95::class));
    }
    public static function getClass97($container)
    {
        return new Class97($container->get(Class96::class));
    }
    public static function getClass98($container)
    {
        return new Class98($container->get(Class97::class));
    }
    public static function getClass99($container)
    {
        return new Class99($container->get(Class98::class));
    }
    public static function getClass100($container)
    {
        return new Class100($container->get(Class99::class));
    }
}
