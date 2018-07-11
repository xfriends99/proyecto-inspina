<?php
namespace App\Repositories;

use App\WorkAddress;

class WorkAddressRepository extends AbstractRepository
{

    function __construct(WorkAddress $model)
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
            ->select('work_addresses.*');

        return $query->orderBy('work_addresses.id', 'asc');
    }

} 