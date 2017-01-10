<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveProject extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'live_projects';

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
    protected $fillable = ['job_id', 'developer_user_id', 'start_date', 'duration', 'status', 'end_date'];

    
}
