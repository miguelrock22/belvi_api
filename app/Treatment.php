<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'name', 'pvp'
    ];

    //======= RELATIONSHIPS //=======
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
