<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    protected $fillable = 
    [
        'user_id','username', 'address', 'postal_code','about_me',
    ];

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
