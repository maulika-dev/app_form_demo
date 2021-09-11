<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantDetail extends Model
{
    use HasFactory;

    protected $table = 'applicant_details';

    protected $fillable = ['first_name','last_name','address','address2','city','state','zip','designation','email','phone_no','gender','r_status','dob'];

    protected $timestamp = true;

    public function getEducationDetail()
    {
    	return $this->hasOne('App\Models\EducationDetail','applicant_id','id');
    }

    public function getWorkExperienceDetail()
    {
    	return $this->hasOne('App\Models\WorkExperienceDetail','applicant_id','id');
    }

    public function getLanguageDetail()
    {
    	return $this->hasMany('App\Models\LanguageDetail','applicant_id','id');
    }

    public function getTechnologyDetail()
    {
    	return $this->hasMany('App\Models\TechnologyDetail','applicant_id','id');
    }

    public function getReferenceDetail()
    {
    	return $this->hasMany('App\Models\ReferenceDetail','applicant_id','id');
    }

    public function getPreferanceDetail()
    {
    	return $this->hasone('App\Models\PreferanceDetail','applicant_id','id');
    }
    
}
