<?php

namespace ContainerXyH1Kxv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommonPreConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CommonPreConfigurator.php';

        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), $a);
    }
}
