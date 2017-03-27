<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyproject extends Model
{
    protected $guarded=[];

    public function milestones(){
    	return $this->hasMany('App\milestone');

    }
   
}
