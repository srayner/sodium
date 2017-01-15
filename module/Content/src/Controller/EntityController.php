<?php

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    protected $service;
 
    protected function __constuct($service)
    {
        $this->service = $service;
    }
    
    public function indexAction()
    {
        $this->view->entities = $this->service->findAll();
    }
    
    public function createAction()
    {
        
    }
}
