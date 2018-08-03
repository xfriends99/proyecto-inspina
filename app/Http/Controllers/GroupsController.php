<?php

namespace App\Http\Controllers;

use App\Repositories\GroupRepository;
use App\Repositories\PrivacyRepository;
use App\Services\FileProcessingService;
use App\Repositories\UserRepository;
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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $params = $request->all();
        if(!isset($params['count'])) $params['count'] = 25;
        if(!isset($params['type'])) $params['type'] = 'table';

        $groups = $this->groupRepository->search($params)->paginate($params['count']);

        if($params['type'] == 'table'){
            return view('groups.index', compact('groups', 'params'));
        } else {
            return view('groups.index', compact('groups', 'params'));
        }
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

     public function generateSerieCode()
     {
       $lastGroup = $this->groupRepository->search()->get()->last();
       $number = $lastGroup ? $lastGroup->code:0;
       $number = ++$number;
       $number = str_repeat('0', 8-strlen($number)).$number;
       return $number;
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|min:3',
                'description' => 'required',
                'privacy_id' => 'required'
                ]);
 
        try {

            DB::beginTransaction();
            $code = $this->generateSerieCode();
            $params = array_merge($request->only('name', 'description','privacy_id'), ['created_by' => \Auth::user()->id, 'code' => $code]);
            $group = $this->groupRepository->create($params);

            /*if($request->has('files')){
                $this->fileProcessingService->uploadFinally(collect(explode(',', $request->files)), $group, $this->groupRepository);
            }*/

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
