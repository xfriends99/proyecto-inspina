<?php
namespace App\Repositories;

use App\Opportunity;

class OpportunityRepository extends AbstractRepository
{

    function __construct(Opportunity $model)
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
            ->select('opportunities.*');

        return $query->orderBy('opportunities.id', 'asc');
    }

} 