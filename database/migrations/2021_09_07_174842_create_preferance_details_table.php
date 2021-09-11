<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferance_details', function (Blueprint $table) {
            $table->id();
            $table->string('location',50)->nullable();
            $table->string('department',50)->nullable();
            $table->string('notice_period',50)->nullable();
            $table->string('expacted_ctc',50)->nullable();
            $table->string('current_ctc',50)->nullable();
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
        Schema::dropIfExists('preferance_details');
    }
}
