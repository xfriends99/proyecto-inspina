<?php
namespace App\Repositories;

use App\Download;

class DownloadRepository extends AbstractRepository
{

    function __construct(Download $model)
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
            ->select('downloads.*');

        return $query->orderBy('downloads.id', 'asc');
    }

} 