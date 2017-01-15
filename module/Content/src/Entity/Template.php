<?php

namespace Content\Entity;

class Template extends AbstractEntity
{
    protected $filename;
    protected $displayName;
    protected $mediaPlaceholders;
    protected $content;
    
    public function getFilename()
    {
        return $this->filename;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function getMediaPlaceholders()
    {
        return $this->mediaPlaceholders;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function setMediaPlaceholders($mediaPlaceholders)
    {
        $this->mediaPlaceholders = $mediaPlaceholders;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


}

