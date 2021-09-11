<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperienceDetail extends Model
{
    use HasFactory;

    protected $table = 'work_experience_details';  

    protected $fillable = ['company_name','designation','from_date','to_date','applicant_id'];

    protected $timestamp = true;
}
