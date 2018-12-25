<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesItem extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    ];

    /**
     * Returns the Sales on which this item belongs to
     *
     * @return App\Sales
     */
    public function sales()
    {
    	return $this->belongsTo(App\Sales::class);
    }

    /**
     * Returns the product associated on this sales
     *
     * @return App\Product
     */
    public function product()
    {
    	return $this->belongsTo(App\Product::class);
    }
}
