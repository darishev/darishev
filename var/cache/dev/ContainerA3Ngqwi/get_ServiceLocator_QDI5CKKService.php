<?php

namespace ContainerA3Ngqwi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QDI5CKKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qDI5CKK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qDI5CKK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lastExecution' => ['privates', '.errored..service_locator.qDI5CKK.DateTime', NULL, 'Cannot autowire service ".service_locator.qDI5CKK": it references class "DateTime" but no such service exists.'],
        ], [
            'lastExecution' => 'DateTime',
        ]);
    }
}