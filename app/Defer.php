<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Defer extends Model 
{	
    protected $fillable = ['user_id','studentid','reason','academic_year','semester','dueacademicyear','duesemester'];
}
