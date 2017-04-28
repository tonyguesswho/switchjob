<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeveloperAccount extends Model
{
    protected $table = 'developer_accounts';

	protected $fillable = ['user_id','account','bank','bvn'];

     public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
