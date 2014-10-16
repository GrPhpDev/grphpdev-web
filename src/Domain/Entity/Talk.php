<?php

namespace GrPhpDev\Domain\Entity;

/**
 * Class Talk
 * @package GrPhpDev\Domain\Entity
 */
class Talk extends AbstractEntity
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
     * @var Event
     */
    protected $event;

    /**
     * @var Member
     */
    protected $speaker;

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
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     * @return $this
     */
    public function setEvent($event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return Member
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }

    /**
     * @param Member $speaker
     * @return $this
     */
    public function setSpeaker($speaker)
    {
        $this->speaker = $speaker;
        return $this;
    }
}
