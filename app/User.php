<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Returns the roles this user currently have
     *
     * @return \Illuminate\Support\Collection
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * The receivings this user have made
     *
     * @return \Illuminate\Support\Collection
     */
    public function receivings()
    {
        return $this->hasMany(App\Receiving::class);
    }

    /**
     * The adjustments this user have made
     *
     * @return \Illuminate\Support\Collection
     */
    public function adjustments()
    {
        return $this->hasMany(App\Adjustment::class);
    }

    /**
     * The sales this user have processed
     *
     * @return \Illuminate\Support\Collection
     */
    public function sales()
    {
        return $this->hasMany(App\Sales::class);
    }
}
