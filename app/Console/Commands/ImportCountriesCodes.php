<?php

namespace App\Console\Commands;
use DB;
use Illuminate\Console\Command;

class ImportCountriesCodes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:countriescodes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'importa el archivo countries.sql con una lista de todos los Paises del mundo';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       DB::unprepared(file_get_contents('database/dumps/countries.sql'));
    }
}
