<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yii2;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class Yii2ContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return "yiisoft/yii2";
    }

    public function getName(): string
    {
        return "yii2";
    }

    public function getDisplayedName(): string
    {
        return "Yii2 Container";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "http://www.yiiframework.com/doc-2.0/guide-concept-di-container.html";
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new AbstractYii2ContainerAdapter();
    }
}
