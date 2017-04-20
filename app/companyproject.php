<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyproject extends Model
{
    protected $guarded=[];


    public function Milestones(){


    	return $this->hasMany('App\Milestone');

    }
   
}
