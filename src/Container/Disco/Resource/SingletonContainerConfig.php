<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Disco\Resource;

use bitExpert\Disco\Annotations\Configuration;
use bitExpert\Disco\Annotations\Bean;
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

// Generated with:
// for ($i = 1; $i <= 100; $i++) {
//     echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
// }
//
// for ($i = 1; $i <= 100; $i++) {
//     echo "    /**\n";
//     echo "     * @Bean\n";
//     echo "     */\n";
//     echo "    public function class" . $i . "(): Class" . $i . "\n";
//     echo "    {\n";
//     if ($i === 1) {
//         echo "        return new Class" . $i . "();\n";
//     } else {
//         echo "        return new Class" . $i . "(\$this->class" . ($i-1) . "());\n";
//     }
//     echo "    }\n\n";
// }

/**
 * @Configuration
 */
class SingletonContainerConfig
{
    /**
     * @Bean
     */
    public function class1(): Class1
    {
        return new Class1();
    }

    /**
     * @Bean
     */
    public function class2(): Class2
    {
        return new Class2($this->class1());
    }

    /**
     * @Bean
     */
    public function class3(): Class3
    {
        return new Class3($this->class2());
    }

    /**
     * @Bean
     */
    public function class4(): Class4
    {
        return new Class4($this->class3());
    }

    /**
     * @Bean
     */
    public function class5(): Class5
    {
        return new Class5($this->class4());
    }

    /**
     * @Bean
     */
    public function class6(): Class6
    {
        return new Class6($this->class5());
    }

    /**
     * @Bean
     */
    public function class7(): Class7
    {
        return new Class7($this->class6());
    }

    /**
     * @Bean
     */
    public function class8(): Class8
    {
        return new Class8($this->class7());
    }

    /**
     * @Bean
     */
    public function class9(): Class9
    {
        return new Class9($this->class8());
    }

    /**
     * @Bean
     */
    public function class10(): Class10
    {
        return new Class10($this->class9());
    }

    /**
     * @Bean
     */
    public function class11(): Class11
    {
        return new Class11($this->class10());
    }

    /**
     * @Bean
     */
    public function class12(): Class12
    {
        return new Class12($this->class11());
    }

    /**
     * @Bean
     */
    public function class13(): Class13
    {
        return new Class13($this->class12());
    }

    /**
     * @Bean
     */
    public function class14(): Class14
    {
        return new Class14($this->class13());
    }

    /**
     * @Bean
     */
    public function class15(): Class15
    {
        return new Class15($this->class14());
    }

    /**
     * @Bean
     */
    public function class16(): Class16
    {
        return new Class16($this->class15());
    }

    /**
     * @Bean
     */
    public function class17(): Class17
    {
        return new Class17($this->class16());
    }

    /**
     * @Bean
     */
    public function class18(): Class18
    {
        return new Class18($this->class17());
    }

    /**
     * @Bean
     */
    public function class19(): Class19
    {
        return new Class19($this->class18());
    }

    /**
     * @Bean
     */
    public function class20(): Class20
    {
        return new Class20($this->class19());
    }

    /**
     * @Bean
     */
    public function class21(): Class21
    {
        return new Class21($this->class20());
    }

    /**
     * @Bean
     */
    public function class22(): Class22
    {
        return new Class22($this->class21());
    }

    /**
     * @Bean
     */
    public function class23(): Class23
    {
        return new Class23($this->class22());
    }

    /**
     * @Bean
     */
    public function class24(): Class24
    {
        return new Class24($this->class23());
    }

    /**
     * @Bean
     */
    public function class25(): Class25
    {
        return new Class25($this->class24());
    }

    /**
     * @Bean
     */
    public function class26(): Class26
    {
        return new Class26($this->class25());
    }

    /**
     * @Bean
     */
    public function class27(): Class27
    {
        return new Class27($this->class26());
    }

    /**
     * @Bean
     */
    public function class28(): Class28
    {
        return new Class28($this->class27());
    }

    /**
     * @Bean
     */
    public function class29(): Class29
    {
        return new Class29($this->class28());
    }

    /**
     * @Bean
     */
    public function class30(): Class30
    {
        return new Class30($this->class29());
    }

    /**
     * @Bean
     */
    public function class31(): Class31
    {
        return new Class31($this->class30());
    }

    /**
     * @Bean
     */
    public function class32(): Class32
    {
        return new Class32($this->class31());
    }

    /**
     * @Bean
     */
    public function class33(): Class33
    {
        return new Class33($this->class32());
    }

    /**
     * @Bean
     */
    public function class34(): Class34
    {
        return new Class34($this->class33());
    }

    /**
     * @Bean
     */
    public function class35(): Class35
    {
        return new Class35($this->class34());
    }

    /**
     * @Bean
     */
    public function class36(): Class36
    {
        return new Class36($this->class35());
    }

    /**
     * @Bean
     */
    public function class37(): Class37
    {
        return new Class37($this->class36());
    }

    /**
     * @Bean
     */
    public function class38(): Class38
    {
        return new Class38($this->class37());
    }

    /**
     * @Bean
     */
    public function class39(): Class39
    {
        return new Class39($this->class38());
    }

    /**
     * @Bean
     */
    public function class40(): Class40
    {
        return new Class40($this->class39());
    }

    /**
     * @Bean
     */
    public function class41(): Class41
    {
        return new Class41($this->class40());
    }

    /**
     * @Bean
     */
    public function class42(): Class42
    {
        return new Class42($this->class41());
    }

    /**
     * @Bean
     */
    public function class43(): Class43
    {
        return new Class43($this->class42());
    }

    /**
     * @Bean
     */
    public function class44(): Class44
    {
        return new Class44($this->class43());
    }

    /**
     * @Bean
     */
    public function class45(): Class45
    {
        return new Class45($this->class44());
    }

    /**
     * @Bean
     */
    public function class46(): Class46
    {
        return new Class46($this->class45());
    }

    /**
     * @Bean
     */
    public function class47(): Class47
    {
        return new Class47($this->class46());
    }

    /**
     * @Bean
     */
    public function class48(): Class48
    {
        return new Class48($this->class47());
    }

    /**
     * @Bean
     */
    public function class49(): Class49
    {
        return new Class49($this->class48());
    }

    /**
     * @Bean
     */
    public function class50(): Class50
    {
        return new Class50($this->class49());
    }

    /**
     * @Bean
     */
    public function class51(): Class51
    {
        return new Class51($this->class50());
    }

    /**
     * @Bean
     */
    public function class52(): Class52
    {
        return new Class52($this->class51());
    }

    /**
     * @Bean
     */
    public function class53(): Class53
    {
        return new Class53($this->class52());
    }

    /**
     * @Bean
     */
    public function class54(): Class54
    {
        return new Class54($this->class53());
    }

    /**
     * @Bean
     */
    public function class55(): Class55
    {
        return new Class55($this->class54());
    }

    /**
     * @Bean
     */
    public function class56(): Class56
    {
        return new Class56($this->class55());
    }

    /**
     * @Bean
     */
    public function class57(): Class57
    {
        return new Class57($this->class56());
    }

    /**
     * @Bean
     */
    public function class58(): Class58
    {
        return new Class58($this->class57());
    }

    /**
     * @Bean
     */
    public function class59(): Class59
    {
        return new Class59($this->class58());
    }

    /**
     * @Bean
     */
    public function class60(): Class60
    {
        return new Class60($this->class59());
    }

    /**
     * @Bean
     */
    public function class61(): Class61
    {
        return new Class61($this->class60());
    }

    /**
     * @Bean
     */
    public function class62(): Class62
    {
        return new Class62($this->class61());
    }

    /**
     * @Bean
     */
    public function class63(): Class63
    {
        return new Class63($this->class62());
    }

    /**
     * @Bean
     */
    public function class64(): Class64
    {
        return new Class64($this->class63());
    }

    /**
     * @Bean
     */
    public function class65(): Class65
    {
        return new Class65($this->class64());
    }

    /**
     * @Bean
     */
    public function class66(): Class66
    {
        return new Class66($this->class65());
    }

    /**
     * @Bean
     */
    public function class67(): Class67
    {
        return new Class67($this->class66());
    }

    /**
     * @Bean
     */
    public function class68(): Class68
    {
        return new Class68($this->class67());
    }

    /**
     * @Bean
     */
    public function class69(): Class69
    {
        return new Class69($this->class68());
    }

    /**
     * @Bean
     */
    public function class70(): Class70
    {
        return new Class70($this->class69());
    }

    /**
     * @Bean
     */
    public function class71(): Class71
    {
        return new Class71($this->class70());
    }

    /**
     * @Bean
     */
    public function class72(): Class72
    {
        return new Class72($this->class71());
    }

    /**
     * @Bean
     */
    public function class73(): Class73
    {
        return new Class73($this->class72());
    }

    /**
     * @Bean
     */
    public function class74(): Class74
    {
        return new Class74($this->class73());
    }

    /**
     * @Bean
     */
    public function class75(): Class75
    {
        return new Class75($this->class74());
    }

    /**
     * @Bean
     */
    public function class76(): Class76
    {
        return new Class76($this->class75());
    }

    /**
     * @Bean
     */
    public function class77(): Class77
    {
        return new Class77($this->class76());
    }

    /**
     * @Bean
     */
    public function class78(): Class78
    {
        return new Class78($this->class77());
    }

    /**
     * @Bean
     */
    public function class79(): Class79
    {
        return new Class79($this->class78());
    }

    /**
     * @Bean
     */
    public function class80(): Class80
    {
        return new Class80($this->class79());
    }

    /**
     * @Bean
     */
    public function class81(): Class81
    {
        return new Class81($this->class80());
    }

    /**
     * @Bean
     */
    public function class82(): Class82
    {
        return new Class82($this->class81());
    }

    /**
     * @Bean
     */
    public function class83(): Class83
    {
        return new Class83($this->class82());
    }

    /**
     * @Bean
     */
    public function class84(): Class84
    {
        return new Class84($this->class83());
    }

    /**
     * @Bean
     */
    public function class85(): Class85
    {
        return new Class85($this->class84());
    }

    /**
     * @Bean
     */
    public function class86(): Class86
    {
        return new Class86($this->class85());
    }

    /**
     * @Bean
     */
    public function class87(): Class87
    {
        return new Class87($this->class86());
    }

    /**
     * @Bean
     */
    public function class88(): Class88
    {
        return new Class88($this->class87());
    }

    /**
     * @Bean
     */
    public function class89(): Class89
    {
        return new Class89($this->class88());
    }

    /**
     * @Bean
     */
    public function class90(): Class90
    {
        return new Class90($this->class89());
    }

    /**
     * @Bean
     */
    public function class91(): Class91
    {
        return new Class91($this->class90());
    }

    /**
     * @Bean
     */
    public function class92(): Class92
    {
        return new Class92($this->class91());
    }

    /**
     * @Bean
     */
    public function class93(): Class93
    {
        return new Class93($this->class92());
    }

    /**
     * @Bean
     */
    public function class94(): Class94
    {
        return new Class94($this->class93());
    }

    /**
     * @Bean
     */
    public function class95(): Class95
    {
        return new Class95($this->class94());
    }

    /**
     * @Bean
     */
    public function class96(): Class96
    {
        return new Class96($this->class95());
    }

    /**
     * @Bean
     */
    public function class97(): Class97
    {
        return new Class97($this->class96());
    }

    /**
     * @Bean
     */
    public function class98(): Class98
    {
        return new Class98($this->class97());
    }

    /**
     * @Bean
     */
    public function class99(): Class99
    {
        return new Class99($this->class98());
    }

    /**
     * @Bean
     */
    public function class100(): Class100
    {
        return new Class100($this->class99());
    }
}
