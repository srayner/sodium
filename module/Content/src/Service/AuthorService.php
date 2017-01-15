<?php

namespace Content\Service;

class AuthorService
{
    protected $entityManager;
    protected $repository;
    
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository('Content\Entity\Author');
    }
    
    public function findAll()
    {
        return $this->repository->findNew();
    }
}