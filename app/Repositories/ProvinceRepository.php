<?php
namespace App\Repositories;

use App\Province;

class ProvinceRepository extends AbstractRepository
{

    function __construct(Province $model)
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
            ->select('provinces.*');

        return $query->orderBy('provinces.id', 'asc');
    }


} 