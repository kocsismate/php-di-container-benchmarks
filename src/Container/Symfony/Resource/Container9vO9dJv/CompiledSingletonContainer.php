<?php

namespace Container9vO9dJv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class CompiledSingletonContainer extends Container
{
    protected $containerDir;
    protected $targetDir;
    protected $parameters = [];
    private $buildParameters;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->methodMap = [
            'DiContainerBenchmarks\\Fixture\\Class10' => 'getClass10Service',
            'DiContainerBenchmarks\\Fixture\\Class100' => 'getClass100Service',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /*
     * Gets the public 'DiContainerBenchmarks\Fixture\Class10' shared autowired service.
     *
     * @return \DiContainerBenchmarks\Fixture\Class10
     */
    protected function getClass10Service()
    {
        return $this->services['DiContainerBenchmarks\\Fixture\\Class10'] = new \DiContainerBenchmarks\Fixture\Class10(new \DiContainerBenchmarks\Fixture\Class9(new \DiContainerBenchmarks\Fixture\Class8(new \DiContainerBenchmarks\Fixture\Class7(new \DiContainerBenchmarks\Fixture\Class6(new \DiContainerBenchmarks\Fixture\Class5(new \DiContainerBenchmarks\Fixture\Class4(new \DiContainerBenchmarks\Fixture\Class3(new \DiContainerBenchmarks\Fixture\Class2(new \DiContainerBenchmarks\Fixture\Class1())))))))));
    }

    /*
     * Gets the public 'DiContainerBenchmarks\Fixture\Class100' shared autowired service.
     *
     * @return \DiContainerBenchmarks\Fixture\Class100
     */
    protected function getClass100Service()
    {
        return $this->services['DiContainerBenchmarks\\Fixture\\Class100'] = new \DiContainerBenchmarks\Fixture\Class100(new \DiContainerBenchmarks\Fixture\Class99(new \DiContainerBenchmarks\Fixture\Class98(new \DiContainerBenchmarks\Fixture\Class97(new \DiContainerBenchmarks\Fixture\Class96(new \DiContainerBenchmarks\Fixture\Class95(new \DiContainerBenchmarks\Fixture\Class94(new \DiContainerBenchmarks\Fixture\Class93(new \DiContainerBenchmarks\Fixture\Class92(new \DiContainerBenchmarks\Fixture\Class91(new \DiContainerBenchmarks\Fixture\Class90(new \DiContainerBenchmarks\Fixture\Class89(new \DiContainerBenchmarks\Fixture\Class88(new \DiContainerBenchmarks\Fixture\Class87(new \DiContainerBenchmarks\Fixture\Class86(new \DiContainerBenchmarks\Fixture\Class85(new \DiContainerBenchmarks\Fixture\Class84(new \DiContainerBenchmarks\Fixture\Class83(new \DiContainerBenchmarks\Fixture\Class82(new \DiContainerBenchmarks\Fixture\Class81(new \DiContainerBenchmarks\Fixture\Class80(new \DiContainerBenchmarks\Fixture\Class79(new \DiContainerBenchmarks\Fixture\Class78(new \DiContainerBenchmarks\Fixture\Class77(new \DiContainerBenchmarks\Fixture\Class76(new \DiContainerBenchmarks\Fixture\Class75(new \DiContainerBenchmarks\Fixture\Class74(new \DiContainerBenchmarks\Fixture\Class73(new \DiContainerBenchmarks\Fixture\Class72(new \DiContainerBenchmarks\Fixture\Class71(new \DiContainerBenchmarks\Fixture\Class70(new \DiContainerBenchmarks\Fixture\Class69(new \DiContainerBenchmarks\Fixture\Class68(new \DiContainerBenchmarks\Fixture\Class67(new \DiContainerBenchmarks\Fixture\Class66(new \DiContainerBenchmarks\Fixture\Class65(new \DiContainerBenchmarks\Fixture\Class64(new \DiContainerBenchmarks\Fixture\Class63(new \DiContainerBenchmarks\Fixture\Class62(new \DiContainerBenchmarks\Fixture\Class61(new \DiContainerBenchmarks\Fixture\Class60(new \DiContainerBenchmarks\Fixture\Class59(new \DiContainerBenchmarks\Fixture\Class58(new \DiContainerBenchmarks\Fixture\Class57(new \DiContainerBenchmarks\Fixture\Class56(new \DiContainerBenchmarks\Fixture\Class55(new \DiContainerBenchmarks\Fixture\Class54(new \DiContainerBenchmarks\Fixture\Class53(new \DiContainerBenchmarks\Fixture\Class52(new \DiContainerBenchmarks\Fixture\Class51(new \DiContainerBenchmarks\Fixture\Class50(new \DiContainerBenchmarks\Fixture\Class49(new \DiContainerBenchmarks\Fixture\Class48(new \DiContainerBenchmarks\Fixture\Class47(new \DiContainerBenchmarks\Fixture\Class46(new \DiContainerBenchmarks\Fixture\Class45(new \DiContainerBenchmarks\Fixture\Class44(new \DiContainerBenchmarks\Fixture\Class43(new \DiContainerBenchmarks\Fixture\Class42(new \DiContainerBenchmarks\Fixture\Class41(new \DiContainerBenchmarks\Fixture\Class40(new \DiContainerBenchmarks\Fixture\Class39(new \DiContainerBenchmarks\Fixture\Class38(new \DiContainerBenchmarks\Fixture\Class37(new \DiContainerBenchmarks\Fixture\Class36(new \DiContainerBenchmarks\Fixture\Class35(new \DiContainerBenchmarks\Fixture\Class34(new \DiContainerBenchmarks\Fixture\Class33(new \DiContainerBenchmarks\Fixture\Class32(new \DiContainerBenchmarks\Fixture\Class31(new \DiContainerBenchmarks\Fixture\Class30(new \DiContainerBenchmarks\Fixture\Class29(new \DiContainerBenchmarks\Fixture\Class28(new \DiContainerBenchmarks\Fixture\Class27(new \DiContainerBenchmarks\Fixture\Class26(new \DiContainerBenchmarks\Fixture\Class25(new \DiContainerBenchmarks\Fixture\Class24(new \DiContainerBenchmarks\Fixture\Class23(new \DiContainerBenchmarks\Fixture\Class22(new \DiContainerBenchmarks\Fixture\Class21(new \DiContainerBenchmarks\Fixture\Class20(new \DiContainerBenchmarks\Fixture\Class19(new \DiContainerBenchmarks\Fixture\Class18(new \DiContainerBenchmarks\Fixture\Class17(new \DiContainerBenchmarks\Fixture\Class16(new \DiContainerBenchmarks\Fixture\Class15(new \DiContainerBenchmarks\Fixture\Class14(new \DiContainerBenchmarks\Fixture\Class13(new \DiContainerBenchmarks\Fixture\Class12(new \DiContainerBenchmarks\Fixture\Class11(($this->services['DiContainerBenchmarks\\Fixture\\Class10'] ?? $this->getClass10Service())))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))));
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || \array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'container.dumper.inline_class_loader' => false,
            'container.dumper.inline_factories' => true,
        ];
    }
}