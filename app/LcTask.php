<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LcTask extends Model
{
    public function scopeIncomplete($query)
    {
        return $query->where('completed',0);
    }
}
