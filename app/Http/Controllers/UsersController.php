<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\CountryRepository;
use App\Repositories\InterestRepository;
use App\Repositories\ContactPreferenceRepository;
use DB;
use Exception;
use Illuminate\Http\Request;

class UsersController extends Controller
{
/**
     * UserRepository $userRepository
     */
    protected $userRepository; 
     /**
     * LanguageRepository $languageRepository
     */
    protected $languageRepository; 
     /**
     * CountryRepository $countryRepository
     */
    protected $countryRepository; 
    /**
     * InterestRepository $interestRepository
     */
    protected $interestRepository; 
    /**
     * ContactPreferenceRepository $contactpreferenceRepository
     */
    protected $contactpreferenceRepository;


/**
     * UsersController constructor.
     * @param UserRepository $userRepository
     * @param LanguageRepository $languageRepository
     * @param CountryRepository $countryRepository
     * @param InterestRepository $interestRepository
     * @param ContactPreferenceRepository $contactpreferenceRepository
     */

    public function __construct(UserRepository $userRepository, LanguageRepository $languageRepository, CountryRepository $countryRepository, InterestRepository $interestRepository, ContactPreferenceRepository $contactpreferenceRepository)
    {
        $this->userRepository = $userRepository;
        $this->languageRepository = $languageRepository;
        $this->countryRepository = $countryRepository;
        $this->interestRepository= $interestRepository;
        $this->contactpreferenceRepository= $contactpreferenceRepository;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = $this->languageRepository->all();
        $countries= $this->countryRepository->all();
        $interests= $this->interestRepository->all();
        $contactpreferences= $this->contactpreferenceRepository->all();

        return view('users.create', compact('languages','countries','interests','contactpreferences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['first_name' => 'required|min:3', 'second_name' => 'required|min:3', 'last_name' => 'required|min:3', 'date_of_birth' => 'required','dni' => 'numeric|required', 'cuit' => 'numeric|required']);
         try{
            DB::beginTransaction();

            $this->userRepository->create($request->only('first_name','second_name','last_name','date_of_birth','dni','cuit'));

            DB::commit();

            return redirect()->route('user.index')->with('alert_success', 'Usuario creado satisfactoriamente!');
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
      return view('users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('users.edit');
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
        $this->validate($request, ['first_name' => 'required', 'second_name' => 'required',
            'last_name' => 'required', 'date_of_birth' => 'required','dni' => 'required', 
            'cuit' => 'required']);

        $user = $this->userRepository->getById($id);

        try {
            DB::beginTransaction();

            $this->userRepository->update($contact, $request->only('first_name','second_name','last_name','date_of_birth','dni','cuit'));

            DB::commit();

            return redirect()->route('user.index')->with('alert_success', 'Datos de Usuario actualizados satisfactoriamente!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


}
