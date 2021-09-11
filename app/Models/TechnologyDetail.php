<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyDetail extends Model
{
    use HasFactory;

    protected $table = 'technology_details';  

    protected $fillable = ['language_type','beginer','mediator','expert','applicant_id'];

    protected $timestamp = true;
}
