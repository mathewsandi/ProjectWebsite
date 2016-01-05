<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
