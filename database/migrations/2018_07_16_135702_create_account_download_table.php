<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountDownloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_download', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('account_id');
            $table->unsignedInteger('download_id');
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('download_id')->references('id')->on('downloads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account_download', function (Blueprint $table) {
            $table->dropForeign('account_download_account_id_foreign');
            $table->dropForeign('account_download_download_id_foreign');
          });
         Schema::dropIfExists('account_download');
    }
}

