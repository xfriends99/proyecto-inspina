<?php
namespace App\Repositories;

use App\OriginSource;

class OriginSourceRepository extends AbstractRepository
{

    function __construct(OriginSource $model)
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
            ->select('origin_sources.*');

        return $query->orderBy('origin_sources.id', 'asc');
    }

}