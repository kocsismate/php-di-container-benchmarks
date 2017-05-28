<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DI;
use DI\Cache\ArrayCache;
use DI\ContainerBuilder;
use DI\Scope;
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
use Interop\Container\ContainerInterface;

abstract class AbstractPhpDiTest implements TestInterface
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    protected function setContainerWithPrototypeServices(): void
    {
        $builder = new ContainerBuilder();
        $builder->setDefinitionCache(new ArrayCache());
        $builder->useAnnotations(false);

        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
           }

           for ($i=1; $i <= 100; $i++) {
               echo "Class" . $i . "::class => DI\autowire()->scope(Scope::PROTOTYPE),\n";
           }
        */
        $builder->addDefinitions([
            Class1::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class2::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class3::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class4::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class5::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class6::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class7::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class8::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class9::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class10::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class11::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class12::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class13::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class14::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class15::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class16::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class17::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class18::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class19::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class20::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class21::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class22::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class23::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class24::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class25::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class26::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class27::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class28::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class29::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class30::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class31::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class32::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class33::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class34::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class35::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class36::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class37::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class38::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class39::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class40::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class41::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class42::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class43::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class44::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class45::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class46::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class47::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class48::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class49::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class50::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class51::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class52::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class53::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class54::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class55::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class56::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class57::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class58::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class59::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class60::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class61::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class62::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class63::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class64::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class65::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class66::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class67::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class68::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class69::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class70::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class71::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class72::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class73::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class74::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class75::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class76::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class77::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class78::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class79::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class80::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class81::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class82::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class83::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class84::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class85::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class86::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class87::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class88::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class89::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class90::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class91::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class92::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class93::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class94::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class95::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class96::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class97::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class98::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class99::class => DI\autowire()->scope(Scope::PROTOTYPE),
            Class100::class => DI\autowire()->scope(Scope::PROTOTYPE),
        ]);

        $this->container = $builder->build();
    }

    protected function setContainerWithSingletonServices(): void
    {
        $builder = new ContainerBuilder();
        $builder->setDefinitionCache(new ArrayCache());
        $builder->useAnnotations(false);

        $this->container = $builder->build();
    }
}
