<?php
namespace App\Repositories;

use App\Invoice;

class InvoiceRepository extends AbstractRepository
{

    function __construct(Invoice $model)
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
            ->select('invoices.*');

        return $query->orderBy('invoices.id', 'asc');
    }

} 