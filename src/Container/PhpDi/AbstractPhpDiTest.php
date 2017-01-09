<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DI;
use DI\Cache\ArrayCache;
use DI\ContainerBuilder;
use DI\Scope;
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

        // Generated with:
        // for ($i=1; $i <= 100; $i++) {
        //    echo "'DiContainerBenchmarks\Fixture\Class" . $i . "' => DI\object()->scope(Scope::PROTOTYPE),\n";
        // }
        $builder->addDefinitions([
            'DiContainerBenchmarks\Fixture\Class1' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class2' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class3' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class4' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class5' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class6' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class7' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class8' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class9' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class10' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class11' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class12' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class13' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class14' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class15' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class16' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class17' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class18' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class19' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class20' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class21' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class22' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class23' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class24' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class25' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class26' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class27' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class28' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class29' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class30' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class31' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class32' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class33' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class34' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class35' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class36' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class37' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class38' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class39' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class40' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class41' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class42' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class43' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class44' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class45' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class46' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class47' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class48' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class49' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class50' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class51' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class52' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class53' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class54' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class55' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class56' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class57' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class58' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class59' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class60' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class61' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class62' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class63' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class64' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class65' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class66' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class67' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class68' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class69' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class70' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class71' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class72' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class73' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class74' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class75' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class76' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class77' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class78' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class79' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class80' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class81' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class82' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class83' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class84' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class85' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class86' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class87' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class88' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class89' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class90' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class91' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class92' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class93' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class94' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class95' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class96' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class97' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class98' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class99' => DI\object()->scope(Scope::PROTOTYPE),
            'DiContainerBenchmarks\Fixture\Class100' => DI\object()->scope(Scope::PROTOTYPE),
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

    public function supported(): bool
    {
        return true;
    }
}
