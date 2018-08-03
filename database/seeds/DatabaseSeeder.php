<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ChannelSeeder::class);
         $this->call(IndustrySeeder::class);
         $this->call(PrivacySeeder::class);
         $this->call(OriginSourceSeeder::class);
         $this->call(InterestSeeder::class);
         $this->call(ContactPreferenceSeeder::class);
         $this->call(LanguageSeeder::class);
         $this->call(PermissionSeeder::class);
         $this->call(CountrySeeder::class);
         $this->call(ProvinceSeeder::class);


    }
}
