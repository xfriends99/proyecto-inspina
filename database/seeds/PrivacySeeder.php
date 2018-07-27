<?php

use Illuminate\Database\Seeder;
use App\Repositories\PrivacyRepository;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(PrivacyRepository $privacyRepository)
    {
         $privacyRepository->create(['name' => 'privado', 'code' => '01']);
         $privacyRepository->create(['name' => 'publico', 'code' => '02']);
         $privacyRepository->create(['name' => 'restringido', 'code' => '03']);
    }
}

