<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Permission extends Model
{
	protected $guarded = ['id'];
	
	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}
}
