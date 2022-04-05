<?php

namespace ContainerUCc2Q4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_SendFailedMessageForRetryListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/SendFailedMessageForRetryListener.php';

        return $container->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener(($container->privates['.service_locator.x_Xm.O6'] ?? $container->load('get_ServiceLocator_XXm_O6Service')), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'async_priority_high' => ['privates', 'messenger.retry.multiplier_retry_strategy.async_priority_high', 'getMessenger_Retry_MultiplierRetryStrategy_AsyncPriorityHighService', true],
            'async_priority_low' => ['privates', 'messenger.retry.multiplier_retry_strategy.async_priority_low', 'getMessenger_Retry_MultiplierRetryStrategy_AsyncPriorityLowService', true],
            'failed' => ['privates', 'messenger.retry.multiplier_retry_strategy.failed', 'getMessenger_Retry_MultiplierRetryStrategy_FailedService', true],
        ], [
            'async_priority_high' => '?',
            'async_priority_low' => '?',
            'failed' => '?',
        ]), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}