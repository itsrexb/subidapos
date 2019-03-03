<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Role extends Model
{
	protected $guarded = ['id'];
	
    public function users()
    {
    	return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
    	return $this->hasMany(Permission::class);
    }
}
