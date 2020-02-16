<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    protected $fillable = [
        'name'
    ];

    //======= RELATIONSHIPS //=======
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function treatments()
    {
        return $this->hasMany('App\Treatment');
    }
}
