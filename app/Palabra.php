<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    public function senias()
    {
        return $this->hasMany('App\Senia');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria', 'palabra_categorias', 'id', 'categoria_id')->using('App\PalabraCategoria');
    }
}
