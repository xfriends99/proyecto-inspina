<?php
namespace App\Repositories;

use App\Account;

class AccountRepository extends AbstractRepository
{

    function __construct(Account $model)
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
            ->select('accounts.*');

        return $query->orderBy('accounts.id', 'asc');
    }

} 