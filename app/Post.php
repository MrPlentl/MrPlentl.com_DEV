<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['post_status','post_author','post_title','post_content'];
    // The inverse
    //protected $guarded = ['csrf_field'];
}
