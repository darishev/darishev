<?php

namespace ContainerA3Ngqwi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchedulerCommandSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Dukecity\CommandSchedulerBundle\EventSubscriber\SchedulerCommandSubscriber' shared service.
     *
     * @return \Dukecity\CommandSchedulerBundle\EventSubscriber\SchedulerCommandSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/EventSubscriber/SchedulerCommandSubscriber.php';

        return $container->privates['Dukecity\\CommandSchedulerBundle\\EventSubscriber\\SchedulerCommandSubscriber'] = new \Dukecity\CommandSchedulerBundle\EventSubscriber\SchedulerCommandSubscriber($container, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), NULL, [], 'cronjob monitoring %s, %s');
    }
}