<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
	use SoftDeletes;
	
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];


    /**
     * The stocks on which this unit is being used
     *
     * @return \Illuminate\Support\Collection
     */
    public function stocks()
    {
    	return $this->hasMany(App\Stock::class);
    }
}
