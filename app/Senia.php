<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senia extends Model
{
    public function palabra()
    {
        return $this->belongsTo('App\Palabra');
    }
}
