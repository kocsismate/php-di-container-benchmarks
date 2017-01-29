<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Container\ContainerInterface;
use TheCodingMachine\Yaco\Compiler;
use TheCodingMachine\Yaco\Definition\ObjectDefinition;

class YacoContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "thecodingmachine/yaco";
    }

    public function getNamespace(): string
    {
        return "Yaco";
    }

    public function getDisplayedName(): string
    {
        return "Yaco";
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return "https://github.com/thecodingmachine/yaco";
    }

    public function build(): void
    {
      // Build container with singleton services
      $containerBuilder = new Compiler();

      $previousDefinition = null;
      for ($i = 1; $i <= 100; $i++) {
          $definition = new ObjectDefinition("DiContainerBenchmarks\\Fixture\\Class$i", "DiContainerBenchmarks\\Fixture\\Class$i");
          if ($previousDefinition !== null) {
            $definition->addConstructorArgument($previousDefinition);
          }
          $previousDefinition = $definition;
          $containerBuilder->addDumpableDefinition($definition);
      }

      file_put_contents(
          PROJECT_ROOT . "/src/Container/Yaco/Resource/CompiledSingletonContainer.php",
          $containerBuilder->compile('DiContainerBenchmarks\\Container\\Yaco\\Resource\\CompiledSingletonContainer')
      );

    }
}
