<?php

namespace IExperts\User\Mapper;

use Doctrine\ORM\EntityManagerInterface;
use IExperts\User\Entity\EntityInterface;

/**
 * Interface of Entity
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
interface MapperInterface
{
    public function setEntityManager(EntityManagerInterface $em);
    
    public function getEntityManager();
    
    public function getEntityRepository();
    
    public function fetchOne($id);
    
    public function fetchAll(array $params);
    
    public function insert(EntityInterface $entity);
    
    public function update(EntityInterface $entity);
    
    public function delete(EntityInterface $entity);
}
