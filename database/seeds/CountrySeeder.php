<?php

use Illuminate\Database\Seeder;
use App\Repositories\CountryRepository;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(CountryRepository $countryRepository)
    {
       $countryRepository->create(['name'=>'Argentina','code'=>'01']);
    }
}
