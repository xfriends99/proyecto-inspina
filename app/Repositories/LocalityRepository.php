<?php
namespace App\Repositories;

use App\Locality;

class LocalityRepository extends AbstractRepository
{

    function __construct(Locality $model)
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
            ->select('localities.*');

        return $query->orderBy('localities.id', 'asc');
    }

} 