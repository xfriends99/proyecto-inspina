<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('answer_to');
            $table->unsignedInteger('replaced_by');
            $table->unsignedInteger('privacy_id');
            $table->unsignedInteger('origin_source_id');
            $table->unsignedInteger('industry_id');
            $table->string('code',30);
            $table->string('state',10);
            $table->string('privacy',10);
            $table->string('account',10);
            $table->string('position',10);
            $table->string('area',10);
            $table->boolean('leave_company');
            $table->string('business_name',100);
            $table->string('fantasy_name',100);
            $table->string('type',15);
            $table->integer('cuit')->unsigned();
            $table->decimal('gross_income',20, 2);
            $table->text('description');
            $table->text('image');
            $table->string('phone',10);
            $table->integer('internal_number')->unsigned();
            $table->timestamps();

            //$table->foreign('answer_to')->references('id')->on('accounts')->onDelete('set null');
            //$table->foreign('replaced_by')->references('id')->on('accounts')->onDelete('set null');
            $table->foreign('answer_to')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('replaced_by')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('privacy_id')->references('id')->on('privacies')->onDelete('cascade');
            $table->foreign('origin_source_id')->references('id')->on('origin_sources')->onDelete('cascade');
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
