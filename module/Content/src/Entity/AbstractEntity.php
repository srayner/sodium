<?php

namespace Content\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class AbstractEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */ 
    protected $id;
    
    
    protected $status;
    
    protected $created;
    protected $createdBy;
    protected $modified;
    protected $modifiedBy;
    
    public function getId()
    {
        return $this->id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }    
    
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

