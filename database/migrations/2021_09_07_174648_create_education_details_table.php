<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->string('ssc_board',50)->nullable();
            $table->string('ssc_year',50)->nullable();
            $table->decimal('ssc_percentage',8,2)->nullable();
            $table->string('hsc_board',255)->nullable();
            $table->string('hsc_year',255)->nullable();
            $table->decimal('hsc_percentage',8,2)->nullable();
            $table->string('b_course_name',255)->nullable();
            $table->string('b_university',255)->nullable();
            $table->string('b_year',255)->nullable();
            $table->decimal('b_percentage',8,2)->nullable();
            $table->string('m_course_name',255)->nullable();
            $table->string('m_university',255)->nullable();
            $table->string('m_year',255)->nullable();
            $table->decimal('m_percentage',8,2)->nullable();
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
        Schema::dropIfExists('education_details');
    }
}
