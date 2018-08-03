<?php

namespace App\Http\Controllers;
use App\Repositories\ContactRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\CountryRepository;
use App\Repositories\InterestRepository;
use App\Repositories\ContactPreferenceRepository;
use DB;
use Exception;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

     /**
     * ContactRepository $contactRepository
     */
    protected $contactRepository;
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
     * ContactsController constructor.
     * @param ContactRepository $contactRepository
     * @param LanguageRepository $languageRepository
     * @param CountryRepository $countryRepository
     * @param InterestRepository $interestRepository
     * @param ContactPreferenceRepository $contactpreferenceRepository
     */

    public function __construct(ContactRepository $contactRepository, LanguageRepository $languageRepository, CountryRepository $countryRepository, InterestRepository $interestRepository, ContactPreferenceRepository $contactpreferenceRepository)
    {
        $this->contactRepository = $contactRepository;
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
         return view('contacts.index');
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

        return view('contacts.create', compact('languages','countries','interests','contactpreferences'));
     
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        $this->validate($request, ['first_name' => 'required|min:3', 'second_name' => 'required|min:3', 'last_name' => 'required|min:3', 'date_of_birth' => 'required','dni' => 'required|numeric', 'cuit' => 'required|numeric']);
        try {
            DB::beginTransaction();

            $this->contactRepository->create($request->only('first_name','second_name','last_name','date_of_birth','dni','cuit'));

            DB::commit();

            return redirect()->route('account.index')->with('alert_success', 'Contacto creado satisfactoriamente!');
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
        return view('contacts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('contacts.edit');
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

        $contact = $this->contactRepository->getById($id);

        try {
            DB::beginTransaction();

            $this->contactRepository->update($contact, $request->only('first_name','second_name','last_name','date_of_birth','dni','cuit'));

            DB::commit();

            return redirect()->route('contact.index')->with('alert_success', 'Contacto actualizado satisfactoriamente!');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

}
