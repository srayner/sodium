<?php

namespace Content\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return [];
    }
    
    public function testAction()
    {
        // TODO: we need to inject a service and a view.
        
        $this->service->findAll();
        $this->view->authors = $this->service->findAll();
        return $this->view;
    }
}