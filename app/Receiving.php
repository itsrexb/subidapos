<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Receiving extends Model
{
    protected $guarded = ['id'];

    protected $dates = [
    	'created_at',
    	'updated_at',
    ];


    /**
     * Returns the user responsible for this receving
     *
     * @return App\User
     */
    public function user()
    {
    	return $this->belongsTo(App\User::class);
    }

    /** 
     * The items associated on this receving
     *
     * @return \Illuminate\Support\Collection
     */
    public function items()
    {
    	return $this->hasMany(App\ReceivingItem::class);
    }

    /**
     * The supplier for this receiving
     *
     * @return App\Supplier
     */
    public function supplier()
    {
    	return $this->hasOne(App\Supplier::class);
    }
}
