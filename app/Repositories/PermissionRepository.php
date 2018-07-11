<?php
namespace App\Repositories;

use App\Permission;

class PermissionRepository extends AbstractRepository
{

    function __construct(Permission $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $filters
     *
     * @return mixed
     */
    public function search(array $filters = [])
    {
        $query = $this->model
            ->distinct()
            ->select('permissions.*');

        return $query->orderBy('permissions.id', 'asc');
    }

}