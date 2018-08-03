<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('modified_by');
            $table->morphs('model');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('modified_by')->references('id')->on('contacts')->onDelete('cascade');

        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('records', function (Blueprint $table) {
            $table->dropForeign('records_created_by_foreign');
            $table->dropForeign('records_modified_by_foreign');
          });
        Schema::dropIfExists('records');
    }
}
