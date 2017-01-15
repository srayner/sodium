<?php

namespace Content\Entity;

class Media extends Content\Entity\AbstractEntity
{
    protected $name;
    protected $altTag;
    protected $mimeType;
    protected $width;
    protected $height;
    protected $url;
    protected $internalFilename;
    protected $fileSize;
    
    public function getName()
    {
        return $this->name;
    }

    public function getAltTag()
    {
        return $this->altTag;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getInternalFilename()
    {
        return $this->internalFilename;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setAltTag($altTag)
    {
        $this->altTag = $altTag;
        return $this;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
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

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setInternalFilename($internalFilename)
    {
        $this->internalFilename = $internalFilename;
        return $this;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }


}
