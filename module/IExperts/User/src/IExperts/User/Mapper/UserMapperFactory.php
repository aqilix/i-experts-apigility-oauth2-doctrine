<?php
namespace IExperts\User\Mapper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * User Mapper Factory
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
class UserMapperFactory implements FactoryInterface
{
    /**
     * Create a service for DoctrineObject Hydrator
     *
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $userMapper = new User();
        $userMapper->setEntityManager($serviceLocator->get('Doctrine\\ORM\\EntityManager'));
        return $userMapper;
    }
}
