<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBlog extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
