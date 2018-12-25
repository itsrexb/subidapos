<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    ];

    /**
     * Returns the user who processed this sales
     *
     * @return App\User
     */
    public function user()
    {
    	return $this->belongsTo(App\User::class);
    }
}
