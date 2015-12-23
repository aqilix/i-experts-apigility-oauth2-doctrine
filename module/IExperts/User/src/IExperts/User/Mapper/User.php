<?php

namespace IExperts\User\Mapper;

class User extends AbstractMapper implements MapperInterface
{
    /**
     * Get Entity Repository
     */
    public function getEntityRepository()
    {
        return $this->getEntityManager()->getRepository('IExperts\User\Entity\User');
    }
}
