<?php
namespace App\Repositories;

use App\Record;

class RecordRepository extends AbstractRepository
{

    function __construct(Record $model)
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
            ->select('records.*');

        return $query->orderBy('records.id', 'asc');
    }

} 