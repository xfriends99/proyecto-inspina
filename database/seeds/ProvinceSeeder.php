<?php

use Illuminate\Database\Seeder;
use App\Repositories\ProvinceRepository;
use App\Repositories\CountryRepository;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ProvinceRepository $provinceRepository,
                        CountryRepository $countryRepository)
    {
        $country = $countryRepository->getByName('Argentina');

        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Buenos Aires','code'=>'AR-B']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Catamarca','code'=>'AR-K']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Chaco','code'=>'AR-H']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Chubut','code'=>'AR-U']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Ciudad Autónoma de Buenos Aires','code'=>'AR-C']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Córdoba','code'=>'AR-X']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Corrientes','code'=>'AR-W']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Entre Ríos','code'=>'AR-E']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Formosa','code'=>'AR-P']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Jujuy','code'=>'AR-Y']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'La Pampa','code'=>'AR-L']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'La Rioja','code'=>'AR-F']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Mendoza','code'=>'AR-M']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Misiones','code'=>'AR-N']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Neuquén','code'=>'AR-Q']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Río Negro','code'=>'AR-R']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Salta','code'=>'AR-A']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'San Juan','code'=>'AR-J']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'San Luis','code'=>'AR-D']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Santa Cruz','code'=>'AR-Z']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Santa Fe','code'=>'AR-S']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Santiago del Estero','code'=>'AR-G']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Tierra del Fuego','code'=>'AR-V']);
        $provinceRepository->create(['country_id'=>$country->id,'name'=>'Tucumán','code'=>'AR-T']);
    }
}


