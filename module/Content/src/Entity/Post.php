<?php

namespace Content\Entity;

class Post extends Content
{
    protected $categories;
    
    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }
}

