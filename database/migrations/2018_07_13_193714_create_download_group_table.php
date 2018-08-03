<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('download_group', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('download_id');
            $table->unsignedInteger('group_id');
            $table->timestamps();

            $table->foreign('download_id')->references('id')->on('downloads')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      
        Schema::table('download_group', function (Blueprint $table) {
            $table->dropForeign('download_group_download_id_foreign');
            $table->dropForeign('download_group_group_id_foreign');
          });
        Schema::dropIfExists('download_group');
    }
}
