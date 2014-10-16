<?php

namespace GrPhpDev\Persistence\Repository;

use DomainException;
use Doctrine\ORM\EntityManager;
use GrPhpDev\Domain\Repository\RepositoryInterface;

/**
 * Class AbstractDoctrineRepository
 * @package GrPhpDev\Persistence\Repository
 */
abstract class AbstractDoctrineRepository implements RepositoryInterface
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * Set us up the class!
     *
     * @param EntityManager $entityManager
     * @throws DomainException
     */
    public function __construct(EntityManager $entityManager)
    {
        if (!class_exists($this->entityClass)) {
            throw new DomainException('Protected property $entityClass must specify fully qualified Entity class name');
        }

        $this->entityManager = $entityManager;
    }

    /**
     * Get all entities.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->entityManager->getRepository($this->entityClass)->findAll();
    }

    /**
     * Get an entity by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    /**
     * Mark the entity to be watched and persisted on flush.
     *
     * @param mixed $model
     */
    public function persist($model)
    {
        // TODO: Implement persist() method.
    }

    /**
     * Save all entity changes to the database.
     */
    public function flush()
    {
        // TODO: Implement flush() method.
    }
}
