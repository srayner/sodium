<?php

namespace Content\Repository;

use Doctrine\ORM\EntityRepository;

class Author extends EntityRepository
{
    public function findNew()
    {
        $dql = "select a from Content\Entity\Author a";
        $query = $this->_em->createQuery($dql);
        return $query->getResult();
    }
}