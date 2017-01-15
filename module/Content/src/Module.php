<?php

namespace Content;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function getServiceConfig()
    {
        return [
            'factories' => [
               'AuthorService' => function($container) {
                   $entityManager = $container->get('Doctrine\ORM\EntityManager');
                   return new Service\AuthorService($entityManager);
               }, 
            ],
        ];
    }
    
    public function getControllerConfig()
    {
        //die(var_dump(Controller\AuthorController::class));
        return [
            'factories' => [
                'author' => function($container) {
                    $service = $container->get('AuthorService');
                    return new Controller\AuthorController($service);
                }    
            ],
        ];
    }
}