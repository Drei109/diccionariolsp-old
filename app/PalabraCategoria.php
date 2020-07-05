<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PalabraCategoria extends Pivot
{
    protected $table = 'palabra_categorias';
}
