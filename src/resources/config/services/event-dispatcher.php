<?php

use Psr\EventDispatcher\EventDispatcherInterface as PsrEventDispatcherInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface as SymfonyComponentEventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface as SymfonyContractEventDispatcherInterface;

return static function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()->defaults()->public();

    $services->set(EventDispatcher::class, EventDispatcher::class);
    $services->alias(SymfonyComponentEventDispatcherInterface::class, EventDispatcher::class);
    $services->alias(SymfonyContractEventDispatcherInterface::class, EventDispatcher::class);
    $services->alias(PsrEventDispatcherInterface::class, EventDispatcher::class);
};