<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dismssal extends Model
{
    protected $fillable = ['user_id','studendid','reason'];

}
