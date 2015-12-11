<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
        return $this->belongsToMany('App\Permission')->withTimestamps();
    }

    public function assignPermission($permission)
    {
        $this->permissions()->attach($permission);
    }

    public function removePermission($permission)
    {
        $this->permissions()->detach($permission);
    }
}
