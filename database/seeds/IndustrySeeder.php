<?php

use Illuminate\Database\Seeder;
use App\Repositories\IndustryRepository;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(IndustryRepository $industryRepository)
    {
         $industryRepository->create(['name'=>'Agro','code'=>'01']);
         $industryRepository->create(['name'=>'Automotriz','code'=>'02']);
         $industryRepository->create(['name'=>'Banco','code'=>'03']);
         $industryRepository->create(['name'=>'Camara Empresarial','code'=>'04']);
         $industryRepository->create(['name'=>'Comercio','code'=>'05']);
         $industryRepository->create(['name'=>'Comunicacion','code'=>'06']);
         $industryRepository->create(['name'=>'Construccion','code'=>'07']);
         $industryRepository->create(['name'=>'Consultoria','code'=>'08']);
         $industryRepository->create(['name'=>'Consumo Masivo','code'=>'09']);
         $industryRepository->create(['name'=>'Diseño','code'=>'10']);
         $industryRepository->create(['name'=>'Economia','code'=>'11']);
         $industryRepository->create(['name'=>'Educación','code'=>'12']);
         $industryRepository->create(['name'=>'Energía','code'=>'13']);
         $industryRepository->create(['name'=>'Estado','code'=>'14']);
         $industryRepository->create(['name'=>'Finanzas','code'=>'15']);
         $industryRepository->create(['name'=>'Fundación','code'=>'16']);
         $industryRepository->create(['name'=>'Gastronomía','code'=>'17']);
         $industryRepository->create(['name'=>'Hotelería','code'=>'18']);
         $industryRepository->create(['name'=>'IT','code'=>'19']);
         $industryRepository->create(['name'=>'Laboratorio','code'=>'20']);
         $industryRepository->create(['name'=>'Limpieza','code'=>'21']);
         $industryRepository->create(['name'=>'Marketing','code'=>'22']);
         $industryRepository->create(['name'=>'Medicina','code'=>'23']);
         $industryRepository->create(['name'=>'Minería','code'=>'24']);
         $industryRepository->create(['name'=>'ONG','code'=>'25']);
         $industryRepository->create(['name'=>'Publicidad','code'=>'26']);
         $industryRepository->create(['name'=>'Retail','code'=>'27']);
         $industryRepository->create(['name'=>'Servicios','code'=>'28']);
         $industryRepository->create(['name'=>'Telecomunicaciones','code'=>'29']);
         $industryRepository->create(['name'=>'Textil','code'=>'30']);
         $industryRepository->create(['name'=>'Transporte','code'=>'31']);
         $industryRepository->create(['name'=>'Turismo','code'=>'32']);
         $industryRepository->create(['name'=>'Ventas','code'=>'33']);
    }
}













    
    
    
    
    
    
    
   
    

 