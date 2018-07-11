<?php
namespace App\Repositories;

use App\Language;

class LanguageRepository extends AbstractRepository
{

    function __construct(Language $model)
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
            ->select('languages.*');

        return $query->orderBy('languages.id', 'asc');
    }

} 