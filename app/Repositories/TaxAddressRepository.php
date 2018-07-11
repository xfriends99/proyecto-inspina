<?php
namespace App\Repositories;

use App\TaxAddress;

class TaxAddressRepository extends AbstractRepository
{

    function __construct(TaxAddress $model)
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
            ->select('tax_addresses.*');

        return $query->orderBy('tax_addresses.id', 'asc');
    }

} 