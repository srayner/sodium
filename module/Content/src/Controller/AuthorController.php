<?php

namespace Content\Controller;

use Content\Entity\Author;
use Content\Form\AuthorForm;
use Content\Form\AuthorFilter;

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
    
    public function addAction()
    {
        $form = new AuthorForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();

        if (! $request->isPost()) {
            return ['form' => $form];
        }

        $author = new Author();
        $form->setInputFilter(new AuthorFilter());
        $form->setData($request->getPost());

        if (! $form->isValid()) {
            return ['form' => $form];
        }

        $album->exchangeArray($form->getData());
        $this->service->persist($album);
        return $this->redirect()->toRoute('control', ['controller' => 'author']);
        
    }
    
    public function editAction()
    {
        
    }
    
    public function deleteAction()
    {
        
    }
}
