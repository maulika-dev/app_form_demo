<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology_details', function (Blueprint $table) {
            $table->id();
            $table->string('language_type',50)->nullable();
            $table->integer('beginer')->nullable();
            $table->integer('mideator')->nullable();
            $table->integer('expert')->nullable();
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
        Schema::dropIfExists('technology_details');
    }
}
