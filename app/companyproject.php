<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyproject extends Model
{
    protected $guarded=[];


    public function Milestones(){


    	return $this->hasMany('App\Milestone');

    }

    public function companyDetail()
    {
    	return $this->belongsTo('App\CompanyDetail');
    }
   
}
