<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable = 
    [
        'user_id','city',
    ];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
