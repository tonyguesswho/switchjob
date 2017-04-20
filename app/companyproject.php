<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyproject extends Model
{
    protected $guarded=[];

    public function milestones(){
    	return $this->hasMany('App\Milestone');

    }
   
}
