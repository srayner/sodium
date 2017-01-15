<?php

namespace Content\Entity;

abstract class Content extends AbstractEntity
{
    protected $title;
    protected $excerpt;
    protected $body;
    protected $urlPath;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaTags;
    protected $author;
    protected $media = array();
    protected $categories = array();
    protected $parent;
    protected $template;
    
    public function getTitle()
    {
        return $this->title;
    }

    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getUrlPath()
    {
        return $this->urlPath;
    }

    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    public function getMetaTags()
    {
        return $this->metaTags;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function setUrlPath($urlPath)
    {
        $this->urlPath = $urlPath;
        return $this;
    }

    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    public function setMetaTags($metaTags)
    {
        $this->metaTags = $metaTags;
        return $this;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }
}
