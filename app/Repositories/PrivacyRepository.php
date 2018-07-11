<?php
namespace App\Repositories;

use App\Privacy;

class PrivacyRepository extends AbstractRepository
{

    function __construct(Privacy $model)
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
            ->select('privacies.*');

        return $query->orderBy('privacies.id', 'asc');
    }

} 