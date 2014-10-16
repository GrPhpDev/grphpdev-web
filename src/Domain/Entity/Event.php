<?php

namespace GrPhpDev\Domain\Entity;

use DateTime;

/**
 * Class Event
 * @package GrPhpDev\Domain\Entity
 */
class Event extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var DateTime
     */
    protected $eventDate;

    /**
     * @var Location
     */
    protected $location;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param DateTime $eventDate
     * @return $this
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
