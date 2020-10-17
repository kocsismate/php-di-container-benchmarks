<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container;

use DiContainerBenchmarks\Container\Aura\AuraContainerDefinition;
use DiContainerBenchmarks\Container\Chubbyphp\ChubbyphpContainerDefinition;
use DiContainerBenchmarks\Container\Dice\DiceContainerDefinition;
use DiContainerBenchmarks\Container\Joomla\JoomlaContainerDefinition;
use DiContainerBenchmarks\Container\LaminasServiceManager\LaminasServiceManagerContainerDefinition;
use DiContainerBenchmarks\Container\Laravel\LaravelContainerDefinition;
use DiContainerBenchmarks\Container\PhpDi\PhpDiContainerDefinition;
use DiContainerBenchmarks\Container\Symfony\SymfonyContainerDefinition;
use DiContainerBenchmarks\Container\Yii2\Yii2ContainerDefinition;
use DiContainerBenchmarks\Container\Zen\ZenContainerDefinition;

final class ContainerDefinitions
{
    /**
     * @return ContainerDefinitionInterface[]
     */
    public static function getAllContainerDefinitions(): array
    {
        return [
            new AuraContainerDefinition(),
            new ChubbyphpContainerDefinition(),
            new DiceContainerDefinition(),
            new JoomlaContainerDefinition(),
            new LaminasServiceManagerContainerDefinition(),
            new LaravelContainerDefinition(),
            new PhpDiContainerDefinition(),
            new SymfonyContainerDefinition(),
            new Yii2ContainerDefinition(),
            new ZenContainerDefinition(),
        ];
    }

    public static function getContainerDefinition(string $name): ?ContainerDefinitionInterface
    {
        foreach (self::getAllContainerDefinitions() as $definition) {
            if ($definition->getName() === $name) {
                return $definition;
            }
        }

        return null;
    }
}
