<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjustment extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    ];

    /**
     * Returns the user who made this adjustment
     *
     * @return App\User
     */
    public function user()
    {
    	return $this->belongsTo(App\User::class);
    }
}
