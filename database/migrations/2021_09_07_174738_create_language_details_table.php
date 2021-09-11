<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguageDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_details', function (Blueprint $table) {
            $table->id();
            $table->string('language_type',50)->nullable();
            $table->integer('read')->nullable();
            $table->integer('write')->nullable();
            $table->integer('speak')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_details');
    }
}
