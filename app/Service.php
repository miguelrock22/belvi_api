<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name'
    ];

    //======= RELATIONSHIPS //=======
    public function subservices()
    {
        return $this->hasMany('App\Subservice');
    }
}
