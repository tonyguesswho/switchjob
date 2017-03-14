<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    public function developer(){
        return $this->belongsTo('App\Developer');
    }
}
