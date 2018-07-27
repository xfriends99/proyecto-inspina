<?php

namespace App\Http\Controllers;

use App\Repositories\GroupRepository;
use App\Repositories\PrivacyRepository;
use App\Services\FileProcessingService;
use DB;
use Exception;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    /**
     * GroupRepository $groupRepository
     */
    protected $groupRepository;

    /**
     * PrivacyRepository $privacyRepository
     */
    protected $privacyRepository;

    /**
     * FileProcessingService $fileProcessingService
     */

    protected $fileProcessingService;

    /**
     * GroupsController constructor.
     * @param GroupRepository $groupRepository
     * @param PrivacyRepository $privacyRepository
     * @param FileProcessingService $fileProcessingService
     */
    public function __construct(GroupRepository $groupRepository,
                                PrivacyRepository $privacyRepository,
                                FileProcessingService $fileProcessingService)
    {
        $this->groupRepository = $groupRepository;
        $this->privacyRepository = $privacyRepository;
        $this->fileProcessingService = $fileProcessingService;
    }
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = $request->all();
        $items = $this->groupRepository->search($params)->paginate(50);

        return view('groups.index')
            ->nest('table', 'groups.table', compact('items', 'params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function create()
     {
        $privacies = $this->privacyRepository->all();
        return view('groups.create', compact('privacies'));
     
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|min:3', 'description' => 'required']);
        try {
            DB::beginTransaction();

            $this->groupRepository->create($request->only('name', 'description'));

          
            DB::commit();

            return redirect()->route('group.index')->with('alert_success', 'Grupo creado satisfactoriamente!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('groups.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('groups.edit');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required', 'description' => 'required']);

        $group = $this->groupRepository->getById($id);

        try {
            DB::beginTransaction();

            $this->groupRepository->update($group, $request->only('name', 'description'));

            DB::commit();

            return redirect()->route('group.index')->with('alert_success', 'Grupo actualizado satisfactoriamente!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

}
