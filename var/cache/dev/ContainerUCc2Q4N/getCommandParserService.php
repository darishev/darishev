<?php

namespace ContainerUCc2Q4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Dukecity\CommandSchedulerBundle\Service\CommandParser' shared service.
     *
     * @return \Dukecity\CommandSchedulerBundle\Service\CommandParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/dukecity/command-scheduler-bundle/Service/CommandParser.php';

        return $container->privates['Dukecity\\CommandSchedulerBundle\\Service\\CommandParser'] = new \Dukecity\CommandSchedulerBundle\Service\CommandParser(($container->services['kernel'] ?? $container->get('kernel', 1)), $container->parameters['dukecity_command_scheduler.excluded_command_namespaces'], []);
    }
}