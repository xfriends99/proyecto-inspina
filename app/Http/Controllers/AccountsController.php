<?php

namespace App\Http\Controllers;
use App\Repositories\IndustryRepository;
use App\Repositories\AccountRepository;
use DB;
use Exception;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
/**
     * AccountRepository $accountRepository
     */
    protected $accountRepository;
    protected $industryRepository; 

    public function __construct(IndustryRepository $industryRepository,AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;

        $this->industryRepository= $industryRepository;


    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accounts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $industries = $this->industryRepository->all();
       return view('accounts.create', compact('industries'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, ['fantasy_name' => 'required|min:3', 'business_name' => 'required', 'cuit' => 'required|numeric', 'description' => 'required']);
         try{
            DB::beginTransaction();

            $this->accountRepository->create($request->only('fantasy_name','business_name','cuit','description'));

            DB::commit();

            return redirect()->route('account.index')->with('alert_success', 'Cuenta creada satisfactoriamente!');
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
        return view('accounts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('accounts.edit');
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
      
         $this->validate($request, ['fantasy_name' => 'required', 'business_name' => 'required', 
            'cuit' => 'required', 'description' => 'required']);

        $account = $this->accountRepository->getById($id);

        try {
            DB::beginTransaction();

            $this->accountRepository->update($account, $request->only('fantasy_name','business_name','cuit','description'));

            DB::commit();

            return redirect()->route('account.index')->with('alert_success', 'Cuenta actualizada satisfactoriamente!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
    
}
