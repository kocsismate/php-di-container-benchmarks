<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yaco;

use DiContainerBenchmarks\Container\ContainerInterface;

class YacoContainer implements ContainerInterface
{
    public function getName(): string
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
          $definition = new ObjectDefinition("DiContainerBenchmarks\\Fixture\\Class$i", []);
          if ($previousDefinition !== null) {
            $definition->addConstructorArgument($previousDefinition);
            $previousDefinition = $definition;
          }
          $containerBuilder->setDefinition("class$i", $definition);
      }

      file_put_contents(
          PROJECT_ROOT . "/src/Container/Yaco/Resource/CompiledSingletonContainer.php",
          $containerBuilder->compile()
      );

    }
}
