<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developerAccount extends Model
{	
	protected $fillable = ['user_id','account','bank','bvn'];

     public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
