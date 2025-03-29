@extends('partials.layout')

@section('title', 'Articulos')

@section('content')
    <h1>@lang('New Articul')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('articulos.store') }}">
        @csrf
        <label for="">@lang('Title')</label><br>
        <input type="text" name="titulo" placeholder="Titulo del articulo" value="{{ old('titulo') }}"><br>
        <label for="">@lang('Content')</label><br>
        <textarea name="contenido" placeholder="Contenido del articulo">{{ old('contenido') }}</textarea><br>
        <label for="">@lang('Image')</label><br>
        <input type="text" name="imagen" placeholder="Imagen del articulo" value="{{ old('imagen') }}"><br>
        <label for="">@lang('Category')</label><br>
        <select name="categoriaBlog_id" id="categoriaBlog_id"><br>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select><br>
        <button>@lang('Create Articul')</button>
    </form>
@endsection