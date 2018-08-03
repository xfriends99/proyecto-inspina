<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_interest', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('interest_id');
            $table->timestamps();

            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('interest_id')->references('id')->on('interests')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_interest', function (Blueprint $table) {
            $table->dropForeign('contact_interest_contact_id_foreign');
            $table->dropForeign('contact_interest_interest_id_foreign');
          });
        Schema::dropIfExists('contact_interest');
    }
}
