<?php

namespace Untek\Core\EventDispatcher\Interfaces;

\Untek\Core\Code\Helpers\DeprecateHelper::hardThrow();

interface EventDispatcherConfiguratorInterface
{

    /**
     * Регистрация подписчика
     * @param string | array | object $subscriberDefinition
     */
    public function addSubscriber($subscriberDefinition): void;

    public function addListener(string $eventName, callable $listener, int $priority = 0);
}