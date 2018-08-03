<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadOpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_opportunity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('download_id');
            $table->unsignedInteger('opportunity_id');
            $table->timestamps();

            $table->foreign('download_id')->references('id')->on('downloads')->onDelete('cascade'); 
            $table->foreign('opportunity_id')->references('id')->on('opportunities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('download_opportunity', function (Blueprint $table) {
             $table->dropForeign('download_opportunity_download_id_foreign');
             $table->dropForeign('download_opportunity_opportunity_id_foreign');
           });
          Schema::dropIfExists('download_opportunity');
    }
}

