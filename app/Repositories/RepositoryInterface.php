<?php

namespace App\Repositories;

/**
 * Interface RepositoryInterface
 * Defines the standard methods for data access.
 */
interface RepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
