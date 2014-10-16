<?php

namespace GrPhpDev\Persistence\Repository;

use GrPhpDev\Domain\Repository\SponsorRepositoryInterface;

/**
 * Class SponsorRepository
 * @package GrPhpDev\Persistence\Repository
 */
class SponsorRepository extends AbstractDoctrineRepository implements SponsorRepositoryInterface
{
    /**
     * @var string
     */
    protected $entityClass = 'GrPhpDev\Domain\Entity\Sponsor';
}
