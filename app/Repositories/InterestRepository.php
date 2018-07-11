<?php
namespace App\Repositories;

use App\Interest;

class InterestRepository extends AbstractRepository
{

    function __construct(Interest $model)
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
            ->select('interests.*');

        return $query->orderBy('interests.id', 'asc');
    }

} 