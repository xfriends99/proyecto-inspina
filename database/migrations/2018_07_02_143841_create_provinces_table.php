<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('country_id');
            $table->string('name',50);
            $table->string('code',5)->nullable();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            
        });
    }
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provinces', function (Blueprint $table) {
             $table->dropForeign('provinces_country_id_foreign');
          });
        Schema::dropIfExists('provinces');

    }
}
