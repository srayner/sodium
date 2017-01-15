<?php

namespace Content\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Content\Repository\Author")
 * @ORM\Table(name="author")
 */
class Author extends AbstractEntity
{
    /** @ORM\Column(type="string") */
    protected $fullname;
    
    /** @ORM\Column(type="string") */
    protected $avatar;
    
    /** @ORM\Column(type="string") */
    protected $email;
    
    /** @ORM\Column(type="string") */
    protected $profile;
    
    public function getFullname()
    {
        return $this->fullname;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
        return $this;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }


}
