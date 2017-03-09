<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

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
    protected $fillable = ['job_type_id', 'description', 'example_app', 'job_attachment', 'start_date', 'job_scope'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
