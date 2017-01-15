<?php

namespace Content\Entity;

class Category extends AbstractEntity
{
    protected $name;
    protected $description;
    protected $parent;
    protected $media;
    
    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }
}
