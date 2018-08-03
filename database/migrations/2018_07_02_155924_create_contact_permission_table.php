<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action',20);
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('permission_id');
            $table->timestamps();

            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_permission', function (Blueprint $table) {
            $table->dropForeign('contact_permission_contact_id_foreign');
            $table->dropForeign('contact_permission_permission_id_foreign');
          });
        Schema::dropIfExists('contact_permission');
    }
}
