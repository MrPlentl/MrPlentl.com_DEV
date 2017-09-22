<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LcPost extends Model
{
    protected $fillable = ['title','body'];
    // The inverse
    //protected $guarded = ['csrf_field'];
}
