<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceDetail extends Model
{
    use HasFactory;

     protected $table = 'reference_details';  

    protected $fillable = ['referance_name','contact_no','relation','applicant_id'];

    protected $timestamp = true;
}
