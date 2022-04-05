<?php

namespace ContainerUCc2Q4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonitorCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Dukecity\CommandSchedulerBundle\Command\MonitorCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Dukecity\\CommandSchedulerBundle\\Command\\MonitorCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scheduler:monitor', [], 'Monitor scheduled commands', false, function () use ($container): \Dukecity\CommandSchedulerBundle\Command\MonitorCommand {
            return ($container->privates['Dukecity\\CommandSchedulerBundle\\Command\\MonitorCommand'] ?? $container->load('getMonitorCommandService'));
        });
    }
}