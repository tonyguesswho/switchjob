<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $guarded=[];

    public function companyproject(){
    	return $this->belongsTo('App\Companyproject');

    }


}
