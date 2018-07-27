<?php

namespace App\Http\Controllers;
use App\Province;
use App\City;
use App\Locality;
use Illuminate\Http\Request;

class CountriesController extends Controller
{




/**
     * province $province
     */
    protected $province; 
    protected $city; 
    protected $locality; 


    public function __construct(Province $province,City $city, Locality $locality)
    {
        $this->province = $province;
        $this->city = $city;
        $this->locality = $locality;

    }


/**
     * Funcion de Busqueda de datos por id
     */
    public function byCountry($id)
    {
        return $this->province->where('country_id',$id)
        ->get();

    }

    public function byProvince($id)
    {
        return $this->city->where('province_id',$id)
        ->get();

    }
     public function byCity($id)
    {
        return $this->locality->where('city_id',$id)
        ->get();

    }
}

