<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function palabras()
    {
        return $this->belongsToMany('App\Palabra')->using('App\PalabraCategoria');
    }
}
