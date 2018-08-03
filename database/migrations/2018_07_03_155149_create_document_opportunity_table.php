<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentOpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_opportunity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('opportunity_id');
            $table->unsignedInteger('document_id');
            $table->timestamps();

            $table->foreign('opportunity_id')->references('id')->on('opportunities')->onDelete('cascade');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document_opportunity', function (Blueprint $table) {
            $table->dropForeign('document_opportunity_opportunity_id_foreign');
            $table->dropForeign('document_opportunity_document_id_foreign');
          });
        Schema::dropIfExists('document_opportunity');
    }
}
