<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
	
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];

    /**
     * The receivings made from this supplier
     *
     * @return \Illuminate\Support\Collection
     */
    public function receivings()
    {
    	return $this->hasMany(App\Receiving::class);
    }
}
