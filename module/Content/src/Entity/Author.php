<?php

namespace ContentEntity;

class Author extends AbstractEntity
{
    protected $fullname;
    protected $avatar;
    protected $email;
    protected $profile;
    
    public function getName()
    {
        return $this->name;
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

    public function setName($name)
    {
        $this->name = $name;
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
