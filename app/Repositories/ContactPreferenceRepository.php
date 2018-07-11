<?php
namespace App\Repositories;

use App\ContactPreference;

class ContactPreferenceRepository extends AbstractRepository
{

    function __construct(ContactPreference $model)
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
            ->select('contact_preferences.*');

        return $query->orderBy('contact_preferences.id', 'asc');
    }

} 