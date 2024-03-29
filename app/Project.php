<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function teams()
    {
        return $this->hasMany('App\Team');
    }
}
