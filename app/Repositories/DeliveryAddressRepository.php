<?php
namespace App\Repositories;

use App\DeliveryAddress;

class DeliveryAddressRepository extends AbstractRepository
{

    function __construct(DeliveryAddress $model)
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
            ->select('delivery_addresses.*');

        return $query->orderBy('delivery_addresses.id', 'asc');
    }

} 