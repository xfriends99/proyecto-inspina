<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
  {
      Schema::create('contacts', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('language_id');
          $table->unsignedInteger('origin_source_id');
          $table->string('code',30);
          $table->enum('state',['ACTIVO','INACTIVO'])->default('ACTIVO');
          $table->string('type_contact',20);
          $table->string('first_name',50);
          $table->string('second_name',50);
          $table->string('last_name',50);
          $table->string('gender',10);
          $table->date('date_of_birth');
          $table->integer('dni')->unsigned() ;
          $table->integer('cuit')->unsigned();
          $table->text('imagen');
          $table->string('mail_default',100);
          $table->string('mail_work',100);
          $table->string('mail_personal',100);
          $table->string('phone_movil',20);
          $table->string('phone_fixed',20);
          $table->string('phone_work',20);
          $table->string('phone_internal_work',20);
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
          $table->foreign('origin_source_id')->references('id')->on('origin_sources')->onDelete('cascade');
      });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropForeign('contacts_user_id_foreign');
            $table->dropForeign('contacts_language_id_foreign');
            $table->dropForeign('contacts_origin_source_id_foreign');
          });
        Schema::dropIfExists('contacts');
    }
}
