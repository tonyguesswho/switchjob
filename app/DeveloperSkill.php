<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeveloperSkill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'developer_skills';

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
    protected $fillable = ['skill_id', 'developer_id', 'user_id'];

    
}
