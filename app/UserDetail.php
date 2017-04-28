<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $guarded =['id'];

    protected $table = 'user_details';

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
