<?php

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class AuthorController extends AbstractActionController
{
    protected $service;
 
    public function __construct($service)
    {
        $this->service = $service;
    }
    
    public function indexAction()
    {
        return [
            'authors' => $this->service->findAll()
        ];
    }
}
