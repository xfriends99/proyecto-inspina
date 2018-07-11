<?php
namespace App\Repositories;

use App\Member;

class MemberRepository extends AbstractRepository
{

    function __construct(Member $model)
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
            ->select('members.*');

        return $query->orderBy('members.id', 'asc');
    }

} 