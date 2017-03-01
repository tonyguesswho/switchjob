<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'developers';

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
    protected $fillable = ['user_id', 'years_of_experience', 'pass_work', 'available_hours', 'languages', 'frameworks'];

    public function skills()
    {

    }

    public function projects()
    {
        # code...
    }
}
