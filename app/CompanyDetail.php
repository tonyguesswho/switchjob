<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model

{	
	  protected $fillable = [
        'building', 'products','started_period','cost','aboutus'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function Job()
    {
    	return $this->hasMany('App\Job');
    }

}
