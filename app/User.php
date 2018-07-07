<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    * Returns the Company acording to this user
    *
    * @return \App\Teacher
    */
    public function company()
    {
        return $this->hasOne('App\Company');
    }

    /**
    * Returns the Worker acording to this user
    *
    * @return \App\Teacher
    */
    public function worker()
    {
        return $this->hasOne('App\Worker');
    }
}
