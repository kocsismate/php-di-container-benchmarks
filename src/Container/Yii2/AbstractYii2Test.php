<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\Yii2;

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
use yii\di\Container;

abstract class AbstractYii2Test implements TestInterface
{
    /**
     * @var Container
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Container();
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i=1; $i <= 100; $i++) {
               echo "\$container->set(Class" . $i . "::class);\n";
           }
        */
        $container->set(Class1::class);
        $container->set(Class2::class);
        $container->set(Class3::class);
        $container->set(Class4::class);
        $container->set(Class5::class);
        $container->set(Class6::class);
        $container->set(Class7::class);
        $container->set(Class8::class);
        $container->set(Class9::class);
        $container->set(Class10::class);
        $container->set(Class11::class);
        $container->set(Class12::class);
        $container->set(Class13::class);
        $container->set(Class14::class);
        $container->set(Class15::class);
        $container->set(Class16::class);
        $container->set(Class17::class);
        $container->set(Class18::class);
        $container->set(Class19::class);
        $container->set(Class20::class);
        $container->set(Class21::class);
        $container->set(Class22::class);
        $container->set(Class23::class);
        $container->set(Class24::class);
        $container->set(Class25::class);
        $container->set(Class26::class);
        $container->set(Class27::class);
        $container->set(Class28::class);
        $container->set(Class29::class);
        $container->set(Class30::class);
        $container->set(Class31::class);
        $container->set(Class32::class);
        $container->set(Class33::class);
        $container->set(Class34::class);
        $container->set(Class35::class);
        $container->set(Class36::class);
        $container->set(Class37::class);
        $container->set(Class38::class);
        $container->set(Class39::class);
        $container->set(Class40::class);
        $container->set(Class41::class);
        $container->set(Class42::class);
        $container->set(Class43::class);
        $container->set(Class44::class);
        $container->set(Class45::class);
        $container->set(Class46::class);
        $container->set(Class47::class);
        $container->set(Class48::class);
        $container->set(Class49::class);
        $container->set(Class50::class);
        $container->set(Class51::class);
        $container->set(Class52::class);
        $container->set(Class53::class);
        $container->set(Class54::class);
        $container->set(Class55::class);
        $container->set(Class56::class);
        $container->set(Class57::class);
        $container->set(Class58::class);
        $container->set(Class59::class);
        $container->set(Class60::class);
        $container->set(Class61::class);
        $container->set(Class62::class);
        $container->set(Class63::class);
        $container->set(Class64::class);
        $container->set(Class65::class);
        $container->set(Class66::class);
        $container->set(Class67::class);
        $container->set(Class68::class);
        $container->set(Class69::class);
        $container->set(Class70::class);
        $container->set(Class71::class);
        $container->set(Class72::class);
        $container->set(Class73::class);
        $container->set(Class74::class);
        $container->set(Class75::class);
        $container->set(Class76::class);
        $container->set(Class77::class);
        $container->set(Class78::class);
        $container->set(Class79::class);
        $container->set(Class80::class);
        $container->set(Class81::class);
        $container->set(Class82::class);
        $container->set(Class83::class);
        $container->set(Class84::class);
        $container->set(Class85::class);
        $container->set(Class86::class);
        $container->set(Class87::class);
        $container->set(Class88::class);
        $container->set(Class89::class);
        $container->set(Class90::class);
        $container->set(Class91::class);
        $container->set(Class92::class);
        $container->set(Class93::class);
        $container->set(Class94::class);
        $container->set(Class95::class);
        $container->set(Class96::class);
        $container->set(Class97::class);
        $container->set(Class98::class);
        $container->set(Class99::class);
        $container->set(Class100::class);

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Container();

        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i=1; $i <= 100; $i++) {
               echo "\$container->setSingleton(Class" . $i . "::class);\n";
           }
        */
        $container->setSingleton(Class1::class);
        $container->setSingleton(Class2::class);
        $container->setSingleton(Class3::class);
        $container->setSingleton(Class4::class);
        $container->setSingleton(Class5::class);
        $container->setSingleton(Class6::class);
        $container->setSingleton(Class7::class);
        $container->setSingleton(Class8::class);
        $container->setSingleton(Class9::class);
        $container->setSingleton(Class10::class);
        $container->setSingleton(Class11::class);
        $container->setSingleton(Class12::class);
        $container->setSingleton(Class13::class);
        $container->setSingleton(Class14::class);
        $container->setSingleton(Class15::class);
        $container->setSingleton(Class16::class);
        $container->setSingleton(Class17::class);
        $container->setSingleton(Class18::class);
        $container->setSingleton(Class19::class);
        $container->setSingleton(Class20::class);
        $container->setSingleton(Class21::class);
        $container->setSingleton(Class22::class);
        $container->setSingleton(Class23::class);
        $container->setSingleton(Class24::class);
        $container->setSingleton(Class25::class);
        $container->setSingleton(Class26::class);
        $container->setSingleton(Class27::class);
        $container->setSingleton(Class28::class);
        $container->setSingleton(Class29::class);
        $container->setSingleton(Class30::class);
        $container->setSingleton(Class31::class);
        $container->setSingleton(Class32::class);
        $container->setSingleton(Class33::class);
        $container->setSingleton(Class34::class);
        $container->setSingleton(Class35::class);
        $container->setSingleton(Class36::class);
        $container->setSingleton(Class37::class);
        $container->setSingleton(Class38::class);
        $container->setSingleton(Class39::class);
        $container->setSingleton(Class40::class);
        $container->setSingleton(Class41::class);
        $container->setSingleton(Class42::class);
        $container->setSingleton(Class43::class);
        $container->setSingleton(Class44::class);
        $container->setSingleton(Class45::class);
        $container->setSingleton(Class46::class);
        $container->setSingleton(Class47::class);
        $container->setSingleton(Class48::class);
        $container->setSingleton(Class49::class);
        $container->setSingleton(Class50::class);
        $container->setSingleton(Class51::class);
        $container->setSingleton(Class52::class);
        $container->setSingleton(Class53::class);
        $container->setSingleton(Class54::class);
        $container->setSingleton(Class55::class);
        $container->setSingleton(Class56::class);
        $container->setSingleton(Class57::class);
        $container->setSingleton(Class58::class);
        $container->setSingleton(Class59::class);
        $container->setSingleton(Class60::class);
        $container->setSingleton(Class61::class);
        $container->setSingleton(Class62::class);
        $container->setSingleton(Class63::class);
        $container->setSingleton(Class64::class);
        $container->setSingleton(Class65::class);
        $container->setSingleton(Class66::class);
        $container->setSingleton(Class67::class);
        $container->setSingleton(Class68::class);
        $container->setSingleton(Class69::class);
        $container->setSingleton(Class70::class);
        $container->setSingleton(Class71::class);
        $container->setSingleton(Class72::class);
        $container->setSingleton(Class73::class);
        $container->setSingleton(Class74::class);
        $container->setSingleton(Class75::class);
        $container->setSingleton(Class76::class);
        $container->setSingleton(Class77::class);
        $container->setSingleton(Class78::class);
        $container->setSingleton(Class79::class);
        $container->setSingleton(Class80::class);
        $container->setSingleton(Class81::class);
        $container->setSingleton(Class82::class);
        $container->setSingleton(Class83::class);
        $container->setSingleton(Class84::class);
        $container->setSingleton(Class85::class);
        $container->setSingleton(Class86::class);
        $container->setSingleton(Class87::class);
        $container->setSingleton(Class88::class);
        $container->setSingleton(Class89::class);
        $container->setSingleton(Class90::class);
        $container->setSingleton(Class91::class);
        $container->setSingleton(Class92::class);
        $container->setSingleton(Class93::class);
        $container->setSingleton(Class94::class);
        $container->setSingleton(Class95::class);
        $container->setSingleton(Class96::class);
        $container->setSingleton(Class97::class);
        $container->setSingleton(Class98::class);
        $container->setSingleton(Class99::class);
        $container->setSingleton(Class100::class);

        $this->container = $container;
    }
}
