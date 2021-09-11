<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetail extends Model
{
    use HasFactory;

    protected $table = 'education_details'; 

    protected $fillable = ['ssc_board','ssc_year','ssc_percentage','hsc_board','hsc_year','hsc_percentage','b_course_name','b_university','b_year','b_percentage','m_course_name','m_university','m_year','m_percentage','applicant_id'];

    protected $timestamp = true;
}
