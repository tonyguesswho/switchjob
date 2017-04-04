<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeveloperSocial extends Model
{
    protected $fillable = ['user_id','git_account','skype_id','linkedin_id','available','cv'];


    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
