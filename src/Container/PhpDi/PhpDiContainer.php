<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DI;
use DI\ContainerBuilder;
use DiContainerBenchmarks\Container\ContainerInterface;
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

class PhpDiContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "php-di/php-di";
    }

    public function getNamespace(): string
    {
        return "PhpDi";
    }

    public function getDisplayedName(): string
    {
        return "PHP-DI";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "http://php-di.org/";
    }

    public function build(): void
    {
        /* Generated with:
           for ($i = 1; $i <= 100; $i++) {
               echo "use DiContainerBenchmarks\\Fixture\\Constructor\\Class" . $i . ";\n";
           }

           for ($i=1; $i <= 100; $i++) {
               echo "Class" . $i . "::class => DI\autowire(),\n";
           }
        */
        $builder = new ContainerBuilder();
        $builder->addDefinitions([
            Class1::class => DI\autowire(),
            Class2::class => DI\autowire(),
            Class3::class => DI\autowire(),
            Class4::class => DI\autowire(),
            Class5::class => DI\autowire(),
            Class6::class => DI\autowire(),
            Class7::class => DI\autowire(),
            Class8::class => DI\autowire(),
            Class9::class => DI\autowire(),
            Class10::class => DI\autowire(),
            Class11::class => DI\autowire(),
            Class12::class => DI\autowire(),
            Class13::class => DI\autowire(),
            Class14::class => DI\autowire(),
            Class15::class => DI\autowire(),
            Class16::class => DI\autowire(),
            Class17::class => DI\autowire(),
            Class18::class => DI\autowire(),
            Class19::class => DI\autowire(),
            Class20::class => DI\autowire(),
            Class21::class => DI\autowire(),
            Class22::class => DI\autowire(),
            Class23::class => DI\autowire(),
            Class24::class => DI\autowire(),
            Class25::class => DI\autowire(),
            Class26::class => DI\autowire(),
            Class27::class => DI\autowire(),
            Class28::class => DI\autowire(),
            Class29::class => DI\autowire(),
            Class30::class => DI\autowire(),
            Class31::class => DI\autowire(),
            Class32::class => DI\autowire(),
            Class33::class => DI\autowire(),
            Class34::class => DI\autowire(),
            Class35::class => DI\autowire(),
            Class36::class => DI\autowire(),
            Class37::class => DI\autowire(),
            Class38::class => DI\autowire(),
            Class39::class => DI\autowire(),
            Class40::class => DI\autowire(),
            Class41::class => DI\autowire(),
            Class42::class => DI\autowire(),
            Class43::class => DI\autowire(),
            Class44::class => DI\autowire(),
            Class45::class => DI\autowire(),
            Class46::class => DI\autowire(),
            Class47::class => DI\autowire(),
            Class48::class => DI\autowire(),
            Class49::class => DI\autowire(),
            Class50::class => DI\autowire(),
            Class51::class => DI\autowire(),
            Class52::class => DI\autowire(),
            Class53::class => DI\autowire(),
            Class54::class => DI\autowire(),
            Class55::class => DI\autowire(),
            Class56::class => DI\autowire(),
            Class57::class => DI\autowire(),
            Class58::class => DI\autowire(),
            Class59::class => DI\autowire(),
            Class60::class => DI\autowire(),
            Class61::class => DI\autowire(),
            Class62::class => DI\autowire(),
            Class63::class => DI\autowire(),
            Class64::class => DI\autowire(),
            Class65::class => DI\autowire(),
            Class66::class => DI\autowire(),
            Class67::class => DI\autowire(),
            Class68::class => DI\autowire(),
            Class69::class => DI\autowire(),
            Class70::class => DI\autowire(),
            Class71::class => DI\autowire(),
            Class72::class => DI\autowire(),
            Class73::class => DI\autowire(),
            Class74::class => DI\autowire(),
            Class75::class => DI\autowire(),
            Class76::class => DI\autowire(),
            Class77::class => DI\autowire(),
            Class78::class => DI\autowire(),
            Class79::class => DI\autowire(),
            Class80::class => DI\autowire(),
            Class81::class => DI\autowire(),
            Class82::class => DI\autowire(),
            Class83::class => DI\autowire(),
            Class84::class => DI\autowire(),
            Class85::class => DI\autowire(),
            Class86::class => DI\autowire(),
            Class87::class => DI\autowire(),
            Class88::class => DI\autowire(),
            Class89::class => DI\autowire(),
            Class90::class => DI\autowire(),
            Class91::class => DI\autowire(),
            Class92::class => DI\autowire(),
            Class93::class => DI\autowire(),
            Class94::class => DI\autowire(),
            Class95::class => DI\autowire(),
            Class96::class => DI\autowire(),
            Class97::class => DI\autowire(),
            Class98::class => DI\autowire(),
            Class99::class => DI\autowire(),
            Class100::class => DI\autowire(),
        ]);

        $builder->enableCompilation(PROJECT_ROOT . "/src/Container/PhpDi/Resource", "CompiledSingletonContainer");
        $builder->build();
    }
}
