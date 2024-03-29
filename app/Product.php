<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'deleted_at'
    ];


    /**
     * The receivings for this product
     *
     * @return \Illuminate\Support\Collection
     */
    public function receivings()
    {
    	return $this->hasMany(App\Receiving::class);
    }

    /**
     * The adjustments made on stocks for this product
     *
     * @return \Illuminate\Support\Collection
     */
    public function adjustments()
    {
    	return $this->hasMany(App\Adjustment::class);
    }


    /**
     * The stocks for this product
     *
     * @return \Illuminate\Support\Collection
     */
    public function stocks()
    {
    	return $this->hasMany(App\Stock::class);
    }

    /**
     * The sales for this product
     *
     * @return \Illuminate\Support\Collection
     */
    public function sales()
    {
    	return $this->hasMany(App\SalesItem::class);
    }

}
