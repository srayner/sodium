<?php

namespace Content\Entity;

abstract class AbstractEntity
{
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

