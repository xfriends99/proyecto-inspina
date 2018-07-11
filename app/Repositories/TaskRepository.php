<?php
namespace App\Repositories;

use App\Task;

class TaskRepository extends AbstractRepository
{

    function __construct(Task $model)
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
            ->select('tasks.*');

        return $query->orderBy('tasks.id', 'asc');
    }

} 