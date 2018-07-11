<?php
namespace App\Repositories;

use App\City;

class CityRepository extends AbstractRepository
{

    function __construct(City $model)
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
            ->select('cities.*');

        return $query->orderBy('cities.id', 'asc');
    }

} 