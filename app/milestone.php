<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class milestone extends Model
{
    protected $guarded=[];

    public function companyproject(){
    	return $this->belongsTo('App\companyproject');

    }


}
