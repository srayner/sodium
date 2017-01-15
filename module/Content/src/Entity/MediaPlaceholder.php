<?php

namespace Content\Entity;

class Placeholder extends AbsractEntity
{
    protected $name;
    protected $width;
    protected $height;
    protected $template;
    
    public function getName()
    {
        return $this->name;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }


}