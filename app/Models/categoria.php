<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
