<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'developers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function skills()
    {

    }

    public function projects()
    {
        # code...
    }

    public function Job()
    {
        return $this->hasMany('App\Job');
    }

    public function Userdetail(){

        return $this->hasOne('App\Userdetail');
    }

    public function User(){

        return $this->belongsTo('App\User');
    }
}
