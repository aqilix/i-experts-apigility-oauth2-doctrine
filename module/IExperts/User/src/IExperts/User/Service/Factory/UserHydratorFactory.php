<?php
namespace IExperts\User\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

/**
 * Hydrator for Doctrine Entity
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
class UserHydratorFactory implements FactoryInterface
{
    /**
     * Create a service for DoctrineObject Hydrator
     *
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $parentServiceLocator = $serviceLocator->getServiceLocator();
        $entityManager = $parentServiceLocator->get('Doctrine\\ORM\\EntityManager');
        $hydrator = new DoctrineObject($entityManager);
        return $hydrator;
    }
}
