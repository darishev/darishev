<?php

namespace ContainerUCc2Q4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExecuteCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.Dukecity\CommandSchedulerBundle\Command\ExecuteCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.Dukecity\\CommandSchedulerBundle\\Command\\ExecuteCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('scheduler:execute', [], 'Execute scheduled commands', false, function () use ($container): \Dukecity\CommandSchedulerBundle\Command\ExecuteCommand {
            return ($container->privates['Dukecity\\CommandSchedulerBundle\\Command\\ExecuteCommand'] ?? $container->load('getExecuteCommandService'));
        });
    }
}