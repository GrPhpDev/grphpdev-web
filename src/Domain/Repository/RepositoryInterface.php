<?php

namespace GrPhpDev\Domain\Repository;

/**
 * Interface RepositoryInterface
 * @package GrPhpDev\Domain\Repository
 */
interface RepositoryInterface
{
    /**
     * Get all entities.
     *
     * @return array
     */
    public function getAll();

    /**
     * Get an entity by ID.
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id);

    /**
     * Mark the entity to be watched and persisted on flush.
     *
     * @param mixed $model
     */
    public function persist($model);

    /**
     * Save all entity changes to the database.
     */
    public function flush();
}
