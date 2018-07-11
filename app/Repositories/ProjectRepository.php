<?php
namespace App\Repositories;

use App\Project;

class ProjectRepository extends AbstractRepository
{

    function __construct(Project $model)
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
            ->select('projects.*');

        return $query->orderBy('projects.id', 'asc');
    }

} 