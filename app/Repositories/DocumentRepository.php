<?php
namespace App\Repositories;

use App\Document;

class DocumentRepository extends AbstractRepository
{

    function __construct(Document $model)
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
            ->select('documents.*');

        return $query->orderBy('documents.id', 'asc');
    }

} 