<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_address', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('province_id');
            $table->unsignedInteger('country_id');
            $table->string('city',50);
            $table->string('localitie',50);
            $table->text('address');
            $table->integer('number');
            $table->integer('floor')->nullable();
            $table->string('department',4)->nullable();
            $table->string('zip_code',8);

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('localities')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
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
        Schema::table('work_address', function (Blueprint $table) {
            $table->dropForeign('work_address_account_id_foreign');
            $table->dropForeign('work_address_location_id_foreign');
            $table->dropForeign('work_address_province_id_foreign');
            $table->dropForeign('work_address_country_id_foreign'); 
          });
         Schema::dropIfExists('work_address');
    }
}