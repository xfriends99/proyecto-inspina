<?php
namespace App\Repositories;

use App\CommercialAddress;

class CommercialAddressRepository extends AbstractRepository
{

    function __construct(CommercialAddress $model)
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
            ->select('commercial_addresses.*');

        return $query->orderBy('commercial_addresses.id', 'asc');
    }

} 