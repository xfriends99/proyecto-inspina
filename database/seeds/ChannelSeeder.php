<?php

use Illuminate\Database\Seeder;
use App\Repositories\ChannelRepository;
class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ChannelRepository $channelRepository)
    {
         $channelRepository->create(['name'=>'Sitio web','code'=>'01']);
         $channelRepository->create(['name'=>'Facebook','code'=>'02']);
         $channelRepository->create(['name'=>'Twitter','code'=>'03']);
         $channelRepository->create(['name'=>'Linkedin','code'=>'04']);
         $channelRepository->create(['name'=>'Instagram','code'=>'05']);
         $channelRepository->create(['name'=>'Pinterest','code'=>'06']);
         $channelRepository->create(['name'=>'Youtube','code'=>'07']);
    }
}
