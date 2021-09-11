<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageDetail extends Model
{
    use HasFactory;

    protected $table = 'language_details';  

    protected $fillable = ['language_type','read','write','speak','applicant_id'];

    protected $timestamp = true;
}
