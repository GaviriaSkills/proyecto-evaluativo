<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porducto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $fillable = ['nombre', 'precio', 'descripcion', 'imagen', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }
}
