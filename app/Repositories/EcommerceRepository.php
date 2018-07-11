<?php
namespace App\Repositories;

use App\Ecommerce;

class EcommerceRepository extends AbstractRepository
{

    function __construct(Ecommerce $model)
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
            ->select('ecommerces.*');

        return $query->orderBy('ecommerces.id', 'asc');
    }

} 