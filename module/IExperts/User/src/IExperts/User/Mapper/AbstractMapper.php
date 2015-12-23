<?php

namespace IExperts\User\Mapper;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use IExperts\User\Entity\EntityInterface as IExpertsEntityInterface;
use Doctrine\ORM\Tools\Pagination\Paginator as DoctrinePaginator;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrinePaginatorAdapter;

/**
 * Abstract Mapper with Doctrine support
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
abstract class AbstractMapper implements ServiceLocatorAwareInterface, MapperInterface
{
    use ServiceLocatorAwareTrait;
    
    use EntityManagerTrait;
    
    /**
     * Insert Entity
     *
     * @param IExpertsEntityInterface $entity
     */
    public function insert(IExpertsEntityInterface $entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    
        return $entity;
    }
    
    /**
     * Fetch Review by Id
     *
     * @param int $id
     */
    public function fetchOne($id)
    {
        return $this->getEntityRepository()->findOneBy(array('id' => $id));
    }
    
    /**
     * Fetch single records with params
     * 
     * @param array $params
     * @return object
     */
    public function fetchOneBy($params = array())
    {
        return $this->getEntityRepository()->findOneBy($params);
    }
    
    /**
     * Fetch Reviews with pagination
     *
     * @param  array $params
     * @return ZendPaginator
     */
    public function fetchAll(array $params)
    {
    }
    
    /**
     * Get Paginator Adapter for list
     *
     * @param  unknown $query
     * @param  boolean $fetchJoinCollection
     * @return DoctrineORMModule\Paginator\Adapter\DoctrinePaginator
     */
    public function buildListPaginatorAdapter(array $params)
    {
        $query   = $this->fetchAll($params);
        $doctrinePaginator = new DoctrinePaginator($query, true);
        $adapter = new DoctrinePaginatorAdapter($doctrinePaginator);
    
        return $adapter;
    }
    
    /**
     * Update Entity
     *
     * @param LisynEntityInterface $entity
     */
    public function update(IExpertsEntityInterface $entity)
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    
        return $entity;
    }
    
    /**
     * Delete Entity
     *
     * @param LisynEntityInterface $entity
     */
    public function delete(IExpertsEntityInterface $entity)
    {
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }
    
    /**
     * Get Entity Repository
     */
    public function getEntityRepository()
    {
    }
}
