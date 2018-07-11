<?php
namespace App\Repositories;

use App\Group;

class GroupRepository extends AbstractRepository
{

    function __construct(Group $model)
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
            ->select('groups.*');

        return $query->orderBy('groups.id', 'asc');
    }

} 