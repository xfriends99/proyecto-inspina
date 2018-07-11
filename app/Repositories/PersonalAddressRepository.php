<?php
namespace App\Repositories;

use App\PersonalAddress;

class PersonalAddressRepository extends AbstractRepository
{

    function __construct(PersonalAddress $model)
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
            ->select('personal_addresses.*');

        return $query->orderBy('personal_addresses.id', 'asc');
    }

} 