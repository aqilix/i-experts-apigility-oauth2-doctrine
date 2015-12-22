<?php
/**
 * IExperts\User Module
 *
 * @link
 * @copyright Copyright (c) 2015
 */
namespace IExperts\User;

use ZF\Apigility\Provider\ApigilityProviderInterface;
use Zend\Uri\UriFactory;
use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;
use ZF\MvcAuth\MvcAuthEvent;

/**
 * Module Class for user
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
class Module implements ApigilityProviderInterface
{
    public function onBootstrap(MvcEvent $mvcEvent)
    {
        UriFactory::registerScheme('chrome-extension', 'Zend\Uri\Uri'); // add chrome-extension for API Client
        $serviceManager = $mvcEvent->getApplication()->getServiceManager();
        $eventManager   = $mvcEvent->getApplication()->getEventManager();
        $sharedEventManager = $eventManager->getSharedManager();
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/../../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
