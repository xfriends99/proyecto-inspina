<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('privacy_id');
            $table->string('name',50);
            $table->string('code',20);
            $table->enum('state',['ACTIVO','INACTIVO'])->default('ACTIVO');
            $table->text('description');
            $table->decimal('price',20,2);
            $table->timestamps();

            $table->foreign('privacy_id')->references('id')->on('privacies')->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opportunities', function (Blueprint $table) {
            $table->dropForeign('opportunities_privacy_id_foreign');
          });
        Schema::dropIfExists('opportunities');
    }
}