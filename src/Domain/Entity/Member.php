<?php

namespace GrPhpDev\Domain\Entity;

/**
 * Class Member
 * @package GrPhpDev\Domain\Entity
 */
class Member extends AbstractEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $avatar;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $twitter;

    /**
     * @var string
     */
    protected $github;

    /**
     * @var array
     */
    protected $talks;

    /**
     * Set us up the class!
     */
    public function __construct()
    {
        $this->talks = [];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param string $twitter
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
        return $this;
    }

    /**
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param string $github
     * @return $this
     */
    public function setGithub($github)
    {
        $this->github = $github;
        return $this;
    }

    /**
     * @return array
     */
    public function getTalks()
    {
        return $this->talks;
    }

    /**
     * @param array $talks
     * @return $this
     */
    public function setTalks($talks)
    {
        $this->talks = $talks;
        return $this;
    }
}
