<?php
namespace Api;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface
{
    public function onBootstrap($e)
    {
        $app = $e->getTarget();
        $service = $app->getServiceManager();
        $sharedEvents = $service->get('SharedEventManager');

        // remove unused fields on user object
        $sharedEvents->attach('ZF\Hal\Plugin\Hal', 'renderEntity.post', function ($event) use ($service) {
            if (!$event->getParam('entity')->entity instanceof \IExperts\User\Entity\User) {
                return;
            }
    
            $entity = $event->getParam('entity');
            $arrayObject  = $event->getParam('payload');
            unset(
                $arrayObject['password'],
                $arrayObject['client'],
                $arrayObject['accessToken'],
                $arrayObject['authorizationCode'],
                $arrayObject['refreshToken']
            );
        });
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
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
