<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyproject extends Model
{
    protected $guarded=[];

<<<<<<< HEAD
    public function Milestones(){
=======
    public function milestones(){
>>>>>>> b899a271a4a0a73298577f11cd5cae1c310e8b80
    	return $this->hasMany('App\Milestone');

    }
   
}
