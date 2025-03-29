<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido', 'imagen', 'categoriaBlog_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\CategoriaBlog');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentarios');
    }
}
