<?php

namespace GrPhpDev\Domain\Entity;

/**
 * Class AbstractEntity
 * @package GrPhpDev\Domain\Model
 */
abstract class AbstractEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
