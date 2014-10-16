<?php

namespace GrPhpDev\Persistence\Repository;

use GrPhpDev\Domain\Repository\EventRepositoryInterface;

/**
 * Class EventRepository
 * @package GrPhpDev\Persistence\Repository
 */
class EventRepository extends AbstractDoctrineRepository implements EventRepositoryInterface
{
    /**
     * @var string
     */
    protected $entityClass = 'GrPhpDev\Domain\Entity\Event';

    /**
     * @return array
     */
    public function getUpcomingEvents()
    {
        // TODO: Implement getUpcomingEvents() method.
    }
}
