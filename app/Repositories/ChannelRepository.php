<?php
namespace App\Repositories;

use App\Channel;

class ChannelRepository extends AbstractRepository
{

    function __construct(Channel $model)
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
            ->select('channels.*');

        return $query->orderBy('channels.id', 'asc');
    }

} 