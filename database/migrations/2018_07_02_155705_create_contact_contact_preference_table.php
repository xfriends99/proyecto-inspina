<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactContactPreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_contact_preference', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('contact_preference_id');
            $table->timestamps();

            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('contact_preference_id')->references('id')->on('contact_preferences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_contact_preference', function (Blueprint $table) {
         $table->dropForeign('contact_contact_preference_contact_id_foreign');
         $table->dropForeign('contact_contact_preference_contact_preference_id_foreign');
          });
        Schema::dropIfExists('contact_contact_preference');
    }
}
