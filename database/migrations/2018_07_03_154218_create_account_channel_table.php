<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_channel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('channel_id');
            $table->string('account',50);
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->timestamps();


            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('channel_id')->references('id')->on('channels')->onDelete('cascade');
        });
    }

 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account_channel', function (Blueprint $table) {
            $table->dropForeign('account_channel_account_id_foreign');
            $table->dropForeign('account_channel_channel_id_foreign');
          });
        Schema::dropIfExists('account_channel');
    }
}