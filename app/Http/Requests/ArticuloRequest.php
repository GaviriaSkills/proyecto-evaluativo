<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required',
            'contenido' => 'required',
            'imagen' => 'required',
            'categoriaBlog_id' => 'required',
        ];
    }
}