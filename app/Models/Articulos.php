<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentarios');
    }
}
