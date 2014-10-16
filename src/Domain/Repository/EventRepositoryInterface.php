<?php

namespace GrPhpDev\Domain\Repository;

/**
 * Interface EventRepository
 * @package GrPhpDev\Domain\Repository
 */
interface EventRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array
     */
    public function getUpcomingEvents();
}
