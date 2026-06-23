<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
