<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invites';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
