<?php

use Illuminate\Database\Seeder;
use App\Repositories\LanguageRepository;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(LanguageRepository $languageRepository)
    {
        $languageRepository->create(['name'=>'Alemán','code'=>'01']);
        $languageRepository->create(['name'=>'Español','code'=>'02']);
        $languageRepository->create(['name'=>'Francés','code'=>'03']);
        $languageRepository->create(['name'=>'Inglés','code'=>'04']);
        $languageRepository->create(['name'=>'Italiano','code'=>'05']);
        $languageRepository->create(['name'=>'Portugués','code'=>'06']);
    }
}








