<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use Auryn\Injector;
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

abstract class AbstractAurynTest implements TestInterface
{
    /**
     * @var Injector
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $container = new Injector();

        $this->container = $container;
    }

    protected function setContainerWithSingletonServices(): void
    {
        $container = new Injector();

        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Class" . $i . ";\n";
           }

           for ($i=1; $i <= 100; $i++) {
               echo "\$container->share(Class" . $i . "::class);\n";
           }
        */
        $container->share(Class1::class);
        $container->share(Class2::class);
        $container->share(Class3::class);
        $container->share(Class4::class);
        $container->share(Class5::class);
        $container->share(Class6::class);
        $container->share(Class7::class);
        $container->share(Class8::class);
        $container->share(Class9::class);
        $container->share(Class10::class);
        $container->share(Class11::class);
        $container->share(Class12::class);
        $container->share(Class13::class);
        $container->share(Class14::class);
        $container->share(Class15::class);
        $container->share(Class16::class);
        $container->share(Class17::class);
        $container->share(Class18::class);
        $container->share(Class19::class);
        $container->share(Class20::class);
        $container->share(Class21::class);
        $container->share(Class22::class);
        $container->share(Class23::class);
        $container->share(Class24::class);
        $container->share(Class25::class);
        $container->share(Class26::class);
        $container->share(Class27::class);
        $container->share(Class28::class);
        $container->share(Class29::class);
        $container->share(Class30::class);
        $container->share(Class31::class);
        $container->share(Class32::class);
        $container->share(Class33::class);
        $container->share(Class34::class);
        $container->share(Class35::class);
        $container->share(Class36::class);
        $container->share(Class37::class);
        $container->share(Class38::class);
        $container->share(Class39::class);
        $container->share(Class40::class);
        $container->share(Class41::class);
        $container->share(Class42::class);
        $container->share(Class43::class);
        $container->share(Class44::class);
        $container->share(Class45::class);
        $container->share(Class46::class);
        $container->share(Class47::class);
        $container->share(Class48::class);
        $container->share(Class49::class);
        $container->share(Class50::class);
        $container->share(Class51::class);
        $container->share(Class52::class);
        $container->share(Class53::class);
        $container->share(Class54::class);
        $container->share(Class55::class);
        $container->share(Class56::class);
        $container->share(Class57::class);
        $container->share(Class58::class);
        $container->share(Class59::class);
        $container->share(Class60::class);
        $container->share(Class61::class);
        $container->share(Class62::class);
        $container->share(Class63::class);
        $container->share(Class64::class);
        $container->share(Class65::class);
        $container->share(Class66::class);
        $container->share(Class67::class);
        $container->share(Class68::class);
        $container->share(Class69::class);
        $container->share(Class70::class);
        $container->share(Class71::class);
        $container->share(Class72::class);
        $container->share(Class73::class);
        $container->share(Class74::class);
        $container->share(Class75::class);
        $container->share(Class76::class);
        $container->share(Class77::class);
        $container->share(Class78::class);
        $container->share(Class79::class);
        $container->share(Class80::class);
        $container->share(Class81::class);
        $container->share(Class82::class);
        $container->share(Class83::class);
        $container->share(Class84::class);
        $container->share(Class85::class);
        $container->share(Class86::class);
        $container->share(Class87::class);
        $container->share(Class88::class);
        $container->share(Class89::class);
        $container->share(Class90::class);
        $container->share(Class91::class);
        $container->share(Class92::class);
        $container->share(Class93::class);
        $container->share(Class94::class);
        $container->share(Class95::class);
        $container->share(Class96::class);
        $container->share(Class97::class);
        $container->share(Class98::class);
        $container->share(Class99::class);
        $container->share(Class100::class);

        $this->container = $container;
    }
}
