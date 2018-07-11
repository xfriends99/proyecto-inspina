<?php
namespace App\Repositories;

use App\Industry;

class IndustryRepository extends AbstractRepository
{

    function __construct(Industry $model)
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
            ->select('industries.*');

        return $query->orderBy('industries.id', 'asc');
    }

} 