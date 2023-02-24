<?php

use Symfony\Component\EventDispatcher\EventDispatcher;
use Untek\Core\Container\Interfaces\ContainerConfiguratorInterface;

return function (ContainerConfiguratorInterface $containerConfigurator) {
    $containerConfigurator->singleton(\Untek\Core\EventDispatcher\Interfaces\EventDispatcherConfiguratorInterface::class, \Untek\Core\EventDispatcher\Libs\EventDispatcherConfigurator::class);
    $containerConfigurator->singleton(\Symfony\Contracts\EventDispatcher\EventDispatcherInterface::class, EventDispatcher::class);
    $containerConfigurator->singleton(\Symfony\Component\EventDispatcher\EventDispatcherInterface::class, EventDispatcher::class);
    $containerConfigurator->singleton(\Psr\EventDispatcher\EventDispatcherInterface::class, EventDispatcher::class);
};
