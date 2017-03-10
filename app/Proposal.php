<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = ['reason', 'question', 'messaging', 'user_id', 'company_id',];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
