<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferanceDetail extends Model
{
    use HasFactory;

    protected $table = 'preferance_details';  

    protected $fillable = ['location','department','notice_period','expacted_ctc','current_ctc','applicant_id'];

    protected $timestamp = true;
}
