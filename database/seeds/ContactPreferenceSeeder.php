<?php

use Illuminate\Database\Seeder;
use App\Repositories\ContactPreferenceRepository;

class ContactPreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ContactPreferenceRepository $contactpreferenceRepository)
    {
         $contactpreferenceRepository->create(['name'=>'Email laboral','code'=>'01']);
         $contactpreferenceRepository->create(['name'=>'Email personal','code'=>'02']);
         $contactpreferenceRepository->create(['name'=>'Facebook','code'=>'03']);
         $contactpreferenceRepository->create(['name'=>'LinkedIn','code'=>'04']);
         $contactpreferenceRepository->create(['name'=>'Teléfono laboral','code'=>'05']);
         $contactpreferenceRepository->create(['name'=>'Teléfono Móvil','code'=>'06']);
         $contactpreferenceRepository->create(['name'=>'Teléfono Personal','code'=>'07']);
         $contactpreferenceRepository->create(['name'=>'Twitter','code'=>'08']);
         $contactpreferenceRepository->create(['name'=>'Whatsapp','code'=>'09']);
    }
}









