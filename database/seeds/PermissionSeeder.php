<?php

use Illuminate\Database\Seeder;
use App\Repositories\PermissionRepository;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(PermissionRepository $permissionRepository)
    {
       $permissionRepository->create(['module'=>'Administrador','code'=>'01']);
       $permissionRepository->create(['module'=>'Analista','code'=>'02']);
       $permissionRepository->create(['module'=>'Editor','code'=>'03']);
       $permissionRepository->create(['module'=>'Invitado','code'=>'04']);
       $permissionRepository->create(['module'=>'Soporte','code'=>'05']);
    }
}






