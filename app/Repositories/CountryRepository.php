<?php
namespace App\Repositories;

use App\Country;

class CountryRepository extends AbstractRepository
{

    function __construct(Country $model)
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
            ->select('countries.*');

        if(isset($filters['name'])){
            $query->where('name', $filters['name']);
        }

        return $query->orderBy('countries.id', 'asc');
    }

    public function getByName($name)
    {
        return $this->search(['name' => $name])->get()->first();
    }

} 