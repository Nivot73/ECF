<?php

namespace ContainerP2ea1NS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PQAPi_EService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PQAPi.e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PQAPi.e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'salle' => ['privates', '.errored..service_locator.PQAPi.e.App\\Entity\\Salle', NULL, 'Cannot autowire service ".service_locator.PQAPi.e": it references class "App\\Entity\\Salle" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'salle' => 'App\\Entity\\Salle',
        ]);
    }
}
