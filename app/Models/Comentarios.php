<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'comentario', 'articulo_id'];

    public function articulo()
    {
        return $this->belongsTo('App\Models\Articulos');
    }
}
