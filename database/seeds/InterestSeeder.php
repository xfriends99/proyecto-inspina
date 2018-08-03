<?php

use Illuminate\Database\Seeder;
use App\Repositories\InterestRepository;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(InterestRepository $interestRepository)
    {
        $interestRepository->create(['name'=>'Arte','code'=>'01']);
        $interestRepository->create(['name'=>'Comunicación','code'=>'02']);
        $interestRepository->create(['name'=>'Cursos','code'=>'03']);
        $interestRepository->create(['name'=>'Deportes','code'=>'04']);
        $interestRepository->create(['name'=>'Espectáculos','code'=>'05']);
        $interestRepository->create(['name'=>'Eventos','code'=>'06']);
        $interestRepository->create(['name'=>'Finanzas','code'=>'07']);
        $interestRepository->create(['name'=>'Gastronomía','code'=>'08']);
        $interestRepository->create(['name'=>'Libros','code'=>'09']);
        $interestRepository->create(['name'=>'Marketing','code'=>'10']);
        $interestRepository->create(['name'=>'Música','code'=>'11']);
        $interestRepository->create(['name'=>'Noticias','code'=>'12']);
        $interestRepository->create(['name'=>'Ofertas','code'=>'13']);
        $interestRepository->create(['name'=>'Películas','code'=>'14']);
        $interestRepository->create(['name'=>'Política','code'=>'15']);
        $interestRepository->create(['name'=>'Salud','code'=>'16']);
        $interestRepository->create(['name'=>'Tecnología','code'=>'17']);
        $interestRepository->create(['name'=>'Tendencias','code'=>'18']);
        $interestRepository->create(['name'=>'Transmisiones en vivo','code'=>'19']);
        $interestRepository->create(['name'=>'TV','code'=>'20']);
        $interestRepository->create(['name'=>'Viajes','code'=>'21']);
        $interestRepository->create(['name'=>'Videojuegos','code'=>'22']);
        $interestRepository->create(['name'=>'Webinars','code'=>'23']);
    }
}










