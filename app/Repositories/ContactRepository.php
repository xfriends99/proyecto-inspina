<?php
namespace App\Repositories;

use App\Contact;

class ContactRepository extends AbstractRepository
{

    function __construct(Contact $model)
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
            ->select('contacts.*');

        return $query->orderBy('contacts.id', 'asc');
    }

} 