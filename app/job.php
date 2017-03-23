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
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }


    public function Developer()
    {
        return $this->belongsTo('App\Developer');
    }

     public function CompanyDetail()
    {
        return $this->belongsTo('App\CompanyDetail');
    }
}
