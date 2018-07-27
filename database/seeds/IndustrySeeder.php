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
         $industryRepository->create(['name'=>'Pesada','code'=>'01']);
         $industryRepository->create(['name'=>'Siderúrgicas','code'=>'02']);
         $industryRepository->create(['name'=>'Metalúrgicas','code'=>'03']);
         $industryRepository->create(['name'=>'Cementeras','code'=>'04']);
         $industryRepository->create(['name'=>'Químicas de base','code'=>'05']);
         $industryRepository->create(['name'=>'Petroquímicas','code'=>'06']);
         $industryRepository->create(['name'=>'Automovilística','code'=>'07']);
         $industryRepository->create(['name'=>'Industria ligera','code'=>'08']);
         $industryRepository->create(['name'=>'Alimentación','code'=>'09']);
         $industryRepository->create(['name'=>'Peletera','code'=>'10']);
         $industryRepository->create(['name'=>'Textil','code'=>'11']);
         $industryRepository->create(['name'=>'Farmacéutica','code'=>'12']);
         $industryRepository->create(['name'=>'Armamentística','code'=>'13']);
         $industryRepository->create(['name'=>'Industria punta','code'=>'14']);
         $industryRepository->create(['name'=>'Robótica','code'=>'15']);
         $industryRepository->create(['name'=>'Informática','code'=>'16']);
         $industryRepository->create(['name'=>'Astronáutica','code'=>'17']);
         $industryRepository->create(['name'=>'Mecánica','code'=>'18']);
         $industryRepository->create(['name'=>'Aeroespacial','code'=>'19']);
    }
}
    
    
    
    
    
    
    
   
    

 