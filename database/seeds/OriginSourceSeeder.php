<?php

use Illuminate\Database\Seeder;
use App\Repositories\OriginSourceRepository;

class OriginSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(OriginSourceRepository $originsourceRepository)
    {
         $originsourceRepository->create(['name' => 'Contacto', 'code' => '01']);
         $originsourceRepository->create(['name' => 'Ecommerce', 'code' => '02']);
         $originsourceRepository->create(['name' => 'Medios', 'code' => '03']);
         $originsourceRepository->create(['name' => 'Redes sociales', 'code' => '04']);
         $originsourceRepository->create(['name' => 'Web', 'code' => '05']);
    }
    
}







