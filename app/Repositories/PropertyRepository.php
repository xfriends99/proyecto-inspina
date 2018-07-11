<?php
namespace App\Repositories;

use App\Property;

class PropertyRepository extends AbstractRepository
{

    function __construct(Property $model)
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
            ->select('properties.*');

        return $query->orderBy('properties.id', 'asc');
    }

} 