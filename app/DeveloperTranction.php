<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeveloperTranction extends Model
{
    protected $fillable = ['developer_id','progress','status'];
}
