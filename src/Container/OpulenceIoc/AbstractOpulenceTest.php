<?php
declare(strict_types = 1);

namespace DiContainerBenchmarks\Container\OpulenceIoc;

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
use Opulence\Ioc\Container;

abstract class AbstractOpulenceTest implements TestInterface
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
               echo "\$container->bindPrototype(Class" . $i . "::class);\n";
           }
        */
        $container->bindPrototype(Class1::class);
        $container->bindPrototype(Class2::class);
        $container->bindPrototype(Class3::class);
        $container->bindPrototype(Class4::class);
        $container->bindPrototype(Class5::class);
        $container->bindPrototype(Class6::class);
        $container->bindPrototype(Class7::class);
        $container->bindPrototype(Class8::class);
        $container->bindPrototype(Class9::class);
        $container->bindPrototype(Class10::class);
        $container->bindPrototype(Class11::class);
        $container->bindPrototype(Class12::class);
        $container->bindPrototype(Class13::class);
        $container->bindPrototype(Class14::class);
        $container->bindPrototype(Class15::class);
        $container->bindPrototype(Class16::class);
        $container->bindPrototype(Class17::class);
        $container->bindPrototype(Class18::class);
        $container->bindPrototype(Class19::class);
        $container->bindPrototype(Class20::class);
        $container->bindPrototype(Class21::class);
        $container->bindPrototype(Class22::class);
        $container->bindPrototype(Class23::class);
        $container->bindPrototype(Class24::class);
        $container->bindPrototype(Class25::class);
        $container->bindPrototype(Class26::class);
        $container->bindPrototype(Class27::class);
        $container->bindPrototype(Class28::class);
        $container->bindPrototype(Class29::class);
        $container->bindPrototype(Class30::class);
        $container->bindPrototype(Class31::class);
        $container->bindPrototype(Class32::class);
        $container->bindPrototype(Class33::class);
        $container->bindPrototype(Class34::class);
        $container->bindPrototype(Class35::class);
        $container->bindPrototype(Class36::class);
        $container->bindPrototype(Class37::class);
        $container->bindPrototype(Class38::class);
        $container->bindPrototype(Class39::class);
        $container->bindPrototype(Class40::class);
        $container->bindPrototype(Class41::class);
        $container->bindPrototype(Class42::class);
        $container->bindPrototype(Class43::class);
        $container->bindPrototype(Class44::class);
        $container->bindPrototype(Class45::class);
        $container->bindPrototype(Class46::class);
        $container->bindPrototype(Class47::class);
        $container->bindPrototype(Class48::class);
        $container->bindPrototype(Class49::class);
        $container->bindPrototype(Class50::class);
        $container->bindPrototype(Class51::class);
        $container->bindPrototype(Class52::class);
        $container->bindPrototype(Class53::class);
        $container->bindPrototype(Class54::class);
        $container->bindPrototype(Class55::class);
        $container->bindPrototype(Class56::class);
        $container->bindPrototype(Class57::class);
        $container->bindPrototype(Class58::class);
        $container->bindPrototype(Class59::class);
        $container->bindPrototype(Class60::class);
        $container->bindPrototype(Class61::class);
        $container->bindPrototype(Class62::class);
        $container->bindPrototype(Class63::class);
        $container->bindPrototype(Class64::class);
        $container->bindPrototype(Class65::class);
        $container->bindPrototype(Class66::class);
        $container->bindPrototype(Class67::class);
        $container->bindPrototype(Class68::class);
        $container->bindPrototype(Class69::class);
        $container->bindPrototype(Class70::class);
        $container->bindPrototype(Class71::class);
        $container->bindPrototype(Class72::class);
        $container->bindPrototype(Class73::class);
        $container->bindPrototype(Class74::class);
        $container->bindPrototype(Class75::class);
        $container->bindPrototype(Class76::class);
        $container->bindPrototype(Class77::class);
        $container->bindPrototype(Class78::class);
        $container->bindPrototype(Class79::class);
        $container->bindPrototype(Class80::class);
        $container->bindPrototype(Class81::class);
        $container->bindPrototype(Class82::class);
        $container->bindPrototype(Class83::class);
        $container->bindPrototype(Class84::class);
        $container->bindPrototype(Class85::class);
        $container->bindPrototype(Class86::class);
        $container->bindPrototype(Class87::class);
        $container->bindPrototype(Class88::class);
        $container->bindPrototype(Class89::class);
        $container->bindPrototype(Class90::class);
        $container->bindPrototype(Class91::class);
        $container->bindPrototype(Class92::class);
        $container->bindPrototype(Class93::class);
        $container->bindPrototype(Class94::class);
        $container->bindPrototype(Class95::class);
        $container->bindPrototype(Class96::class);
        $container->bindPrototype(Class97::class);
        $container->bindPrototype(Class98::class);
        $container->bindPrototype(Class99::class);
        $container->bindPrototype(Class100::class);

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
               echo "\$container->bindSingleton(Class" . $i . "::class);\n";
           }
        */
        $container->bindSingleton(Class1::class);
        $container->bindSingleton(Class2::class);
        $container->bindSingleton(Class3::class);
        $container->bindSingleton(Class4::class);
        $container->bindSingleton(Class5::class);
        $container->bindSingleton(Class6::class);
        $container->bindSingleton(Class7::class);
        $container->bindSingleton(Class8::class);
        $container->bindSingleton(Class9::class);
        $container->bindSingleton(Class10::class);
        $container->bindSingleton(Class11::class);
        $container->bindSingleton(Class12::class);
        $container->bindSingleton(Class13::class);
        $container->bindSingleton(Class14::class);
        $container->bindSingleton(Class15::class);
        $container->bindSingleton(Class16::class);
        $container->bindSingleton(Class17::class);
        $container->bindSingleton(Class18::class);
        $container->bindSingleton(Class19::class);
        $container->bindSingleton(Class20::class);
        $container->bindSingleton(Class21::class);
        $container->bindSingleton(Class22::class);
        $container->bindSingleton(Class23::class);
        $container->bindSingleton(Class24::class);
        $container->bindSingleton(Class25::class);
        $container->bindSingleton(Class26::class);
        $container->bindSingleton(Class27::class);
        $container->bindSingleton(Class28::class);
        $container->bindSingleton(Class29::class);
        $container->bindSingleton(Class30::class);
        $container->bindSingleton(Class31::class);
        $container->bindSingleton(Class32::class);
        $container->bindSingleton(Class33::class);
        $container->bindSingleton(Class34::class);
        $container->bindSingleton(Class35::class);
        $container->bindSingleton(Class36::class);
        $container->bindSingleton(Class37::class);
        $container->bindSingleton(Class38::class);
        $container->bindSingleton(Class39::class);
        $container->bindSingleton(Class40::class);
        $container->bindSingleton(Class41::class);
        $container->bindSingleton(Class42::class);
        $container->bindSingleton(Class43::class);
        $container->bindSingleton(Class44::class);
        $container->bindSingleton(Class45::class);
        $container->bindSingleton(Class46::class);
        $container->bindSingleton(Class47::class);
        $container->bindSingleton(Class48::class);
        $container->bindSingleton(Class49::class);
        $container->bindSingleton(Class50::class);
        $container->bindSingleton(Class51::class);
        $container->bindSingleton(Class52::class);
        $container->bindSingleton(Class53::class);
        $container->bindSingleton(Class54::class);
        $container->bindSingleton(Class55::class);
        $container->bindSingleton(Class56::class);
        $container->bindSingleton(Class57::class);
        $container->bindSingleton(Class58::class);
        $container->bindSingleton(Class59::class);
        $container->bindSingleton(Class60::class);
        $container->bindSingleton(Class61::class);
        $container->bindSingleton(Class62::class);
        $container->bindSingleton(Class63::class);
        $container->bindSingleton(Class64::class);
        $container->bindSingleton(Class65::class);
        $container->bindSingleton(Class66::class);
        $container->bindSingleton(Class67::class);
        $container->bindSingleton(Class68::class);
        $container->bindSingleton(Class69::class);
        $container->bindSingleton(Class70::class);
        $container->bindSingleton(Class71::class);
        $container->bindSingleton(Class72::class);
        $container->bindSingleton(Class73::class);
        $container->bindSingleton(Class74::class);
        $container->bindSingleton(Class75::class);
        $container->bindSingleton(Class76::class);
        $container->bindSingleton(Class77::class);
        $container->bindSingleton(Class78::class);
        $container->bindSingleton(Class79::class);
        $container->bindSingleton(Class80::class);
        $container->bindSingleton(Class81::class);
        $container->bindSingleton(Class82::class);
        $container->bindSingleton(Class83::class);
        $container->bindSingleton(Class84::class);
        $container->bindSingleton(Class85::class);
        $container->bindSingleton(Class86::class);
        $container->bindSingleton(Class87::class);
        $container->bindSingleton(Class88::class);
        $container->bindSingleton(Class89::class);
        $container->bindSingleton(Class90::class);
        $container->bindSingleton(Class91::class);
        $container->bindSingleton(Class92::class);
        $container->bindSingleton(Class93::class);
        $container->bindSingleton(Class94::class);
        $container->bindSingleton(Class95::class);
        $container->bindSingleton(Class96::class);
        $container->bindSingleton(Class97::class);
        $container->bindSingleton(Class98::class);
        $container->bindSingleton(Class99::class);
        $container->bindSingleton(Class100::class);

        $this->container = $container;
    }
}
