<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('city_id');
            $table->string('name',100);
            $table->string('name_alt',100)->nullable();
            $table->string('code',10)->nullable();
            $table->string('abb_code',5)->nullable();


            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localities', function (Blueprint $table) {
             $table->dropForeign('localities_city_id_foreign');
          });
        Schema::dropIfExists('localities');
    }
}
