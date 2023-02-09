<?php

namespace ContainerH1J1v2M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ICr7UqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._ICr7Uq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._ICr7Uq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AtelierController::delete' => ['privates', '.service_locator.Dlm5CVF', 'get_ServiceLocator_Dlm5CVFService', true],
            'App\\Controller\\AtelierController::desinscrire' => ['privates', '.service_locator.SfxZffI', 'get_ServiceLocator_SfxZffIService', true],
            'App\\Controller\\AtelierController::edit' => ['privates', '.service_locator.Dlm5CVF', 'get_ServiceLocator_Dlm5CVFService', true],
            'App\\Controller\\AtelierController::index' => ['privates', '.service_locator.1yyZjXW', 'get_ServiceLocator_1yyZjXWService', true],
            'App\\Controller\\AtelierController::inscrire' => ['privates', '.service_locator.SfxZffI', 'get_ServiceLocator_SfxZffIService', true],
            'App\\Controller\\AtelierController::listeApprentis' => ['privates', '.service_locator.T2EvGW0', 'get_ServiceLocator_T2EvGW0Service', true],
            'App\\Controller\\AtelierController::listeApprentisitri' => ['privates', '.service_locator.T2EvGW0', 'get_ServiceLocator_T2EvGW0Service', true],
            'App\\Controller\\AtelierController::new' => ['privates', '.service_locator.1UhixpL', 'get_ServiceLocator_1UhixpLService', true],
            'App\\Controller\\AtelierController::show' => ['privates', '.service_locator.O38UodM', 'get_ServiceLocator_O38UodMService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.oogCZpI', 'get_ServiceLocator_OogCZpIService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AtelierController:delete' => ['privates', '.service_locator.Dlm5CVF', 'get_ServiceLocator_Dlm5CVFService', true],
            'App\\Controller\\AtelierController:desinscrire' => ['privates', '.service_locator.SfxZffI', 'get_ServiceLocator_SfxZffIService', true],
            'App\\Controller\\AtelierController:edit' => ['privates', '.service_locator.Dlm5CVF', 'get_ServiceLocator_Dlm5CVFService', true],
            'App\\Controller\\AtelierController:index' => ['privates', '.service_locator.1yyZjXW', 'get_ServiceLocator_1yyZjXWService', true],
            'App\\Controller\\AtelierController:inscrire' => ['privates', '.service_locator.SfxZffI', 'get_ServiceLocator_SfxZffIService', true],
            'App\\Controller\\AtelierController:listeApprentis' => ['privates', '.service_locator.T2EvGW0', 'get_ServiceLocator_T2EvGW0Service', true],
            'App\\Controller\\AtelierController:listeApprentisitri' => ['privates', '.service_locator.T2EvGW0', 'get_ServiceLocator_T2EvGW0Service', true],
            'App\\Controller\\AtelierController:new' => ['privates', '.service_locator.1UhixpL', 'get_ServiceLocator_1UhixpLService', true],
            'App\\Controller\\AtelierController:show' => ['privates', '.service_locator.O38UodM', 'get_ServiceLocator_O38UodMService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.oogCZpI', 'get_ServiceLocator_OogCZpIService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AtelierController::delete' => '?',
            'App\\Controller\\AtelierController::desinscrire' => '?',
            'App\\Controller\\AtelierController::edit' => '?',
            'App\\Controller\\AtelierController::index' => '?',
            'App\\Controller\\AtelierController::inscrire' => '?',
            'App\\Controller\\AtelierController::listeApprentis' => '?',
            'App\\Controller\\AtelierController::listeApprentisitri' => '?',
            'App\\Controller\\AtelierController::new' => '?',
            'App\\Controller\\AtelierController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AtelierController:delete' => '?',
            'App\\Controller\\AtelierController:desinscrire' => '?',
            'App\\Controller\\AtelierController:edit' => '?',
            'App\\Controller\\AtelierController:index' => '?',
            'App\\Controller\\AtelierController:inscrire' => '?',
            'App\\Controller\\AtelierController:listeApprentis' => '?',
            'App\\Controller\\AtelierController:listeApprentisitri' => '?',
            'App\\Controller\\AtelierController:new' => '?',
            'App\\Controller\\AtelierController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
