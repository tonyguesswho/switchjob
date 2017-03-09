<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = 
    [
        'user_id','country',
    ];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
