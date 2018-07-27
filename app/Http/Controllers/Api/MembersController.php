<?php

namespace App\Http\Controllers\Api;

use App\Repositories\ContactRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    /**
     * ContactRepository $contactRepository
     */
    protected $contactRepository;

    /**
     * MembersController constructor.
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function search(Request $request)
    {
        $params = $request->all();

        $members = $this->contactRepository->search()
            ->select('first_name', 'last_name')->get();

        return response()->json(['data' => $members]);
    }
}
