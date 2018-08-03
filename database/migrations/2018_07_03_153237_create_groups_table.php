<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('privacy_id');
            $table->string('name',100);
            $table->string('code',20);
            $table->enum('state',['ACTIVO','INACTIVO'])->default('ACTIVO');
            $table->text('description');
            $table->timestamps();

            $table->foreign('privacy_id')->references('id')->on('privacies')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropForeign('groups_privacy_id_foreign');
            $table->dropForeign('groups_created_by_foreign');
          });
        Schema::dropIfExists('groups');
    }
}
