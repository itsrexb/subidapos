<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    ];

    /**
     * Returns the product on which this stock belongs to
     *
     * @return App\Product
     */
    public function product()
    {
    	return $this->belongsTo(App\Product::class);
    }

    /**
     * The unit of measurement used on this stock
     *
     * @return App\Unit
     */
    public function unit()
    {
    	return $this->belongsTo(App\Unit::class);
    }
}
