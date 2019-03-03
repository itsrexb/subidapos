<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class ReceivingItem extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    	'expiration_date', // the expiration date of the item received
    ];


    /**
     * Returns the receiving this item is associated to
     *
     * @return App\Receiving
     */
    public function receiving()
    {
    	return $this->belongsTo(App\Receiving::class);
    }
}
