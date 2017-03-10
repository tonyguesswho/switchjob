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
        'firstname','lastname', 'email', 'password', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function Userdetail()
    {
        return $this->hasOne('App\Userdetail');
    }

     public function Country()
    {
        return $this->hasOne('App\Country');
    }

     public function City()
    {
        return $this->hasOne('App\City');
    }

    public function Job()
    {
        return $this->hasMany('App\Job');
    }

    public function CompanyDetail()
    {
      return $this->hasOne('App\CompanyDetail');

    }


    public function Invite()
    {
      return $this->hasMany('App\Invite');

    }
}
