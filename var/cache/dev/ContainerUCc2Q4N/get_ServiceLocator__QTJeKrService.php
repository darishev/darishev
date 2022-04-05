<?php

namespace ContainerUCc2Q4N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__QTJeKrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..qTJeKr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..qTJeKr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\CommentCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\CommentCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\CommentCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\CommentCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\CommentCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\CommentCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\CommentCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\CommentCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\ConferenceController::index' => ['privates', '.service_locator.Lwh3nbS', 'get_ServiceLocator_Lwh3nbSService', true],
            'App\\Controller\\ConferenceController::show' => ['privates', '.service_locator.VocWbTp', 'get_ServiceLocator_VocWbTpService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand::setCreatedAt' => ['privates', '.service_locator.jVIJtSF', 'get_ServiceLocator_JVIJtSFService', true],
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand::setLastExecution' => ['privates', '.service_locator.qDI5CKK', 'get_ServiceLocator_QDI5CKKService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\CommentCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\CommentCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\CommentCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\CommentCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\CommentCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\CommentCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\CommentCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\CommentCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\CommentCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ConferenceCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ConferenceCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\ConferenceController:index' => ['privates', '.service_locator.Lwh3nbS', 'get_ServiceLocator_Lwh3nbSService', true],
            'App\\Controller\\ConferenceController:show' => ['privates', '.service_locator.VocWbTp', 'get_ServiceLocator_VocWbTpService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand:setCreatedAt' => ['privates', '.service_locator.jVIJtSF', 'get_ServiceLocator_JVIJtSFService', true],
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand:setLastExecution' => ['privates', '.service_locator.qDI5CKK', 'get_ServiceLocator_QDI5CKKService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\CommentCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CommentCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController::delete' => '?',
            'App\\Controller\\Admin\\CommentCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController::detail' => '?',
            'App\\Controller\\Admin\\CommentCrudController::edit' => '?',
            'App\\Controller\\Admin\\CommentCrudController::index' => '?',
            'App\\Controller\\Admin\\CommentCrudController::new' => '?',
            'App\\Controller\\Admin\\CommentCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::delete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::detail' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::edit' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::index' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::new' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\ConferenceController::index' => '?',
            'App\\Controller\\ConferenceController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand::setCreatedAt' => '?',
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand::setLastExecution' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\CommentCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CommentCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CommentCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CommentCrudController:delete' => '?',
            'App\\Controller\\Admin\\CommentCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController:detail' => '?',
            'App\\Controller\\Admin\\CommentCrudController:edit' => '?',
            'App\\Controller\\Admin\\CommentCrudController:index' => '?',
            'App\\Controller\\Admin\\CommentCrudController:new' => '?',
            'App\\Controller\\Admin\\CommentCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CommentCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CommentCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:delete' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:detail' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:edit' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:index' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:new' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ConferenceCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\ConferenceController:index' => '?',
            'App\\Controller\\ConferenceController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand:setCreatedAt' => '?',
            'Dukecity\\CommandSchedulerBundle\\Entity\\ScheduledCommand:setLastExecution' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}