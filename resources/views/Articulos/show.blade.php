@extends('partials.layout')
@section('title', 'Articulos')

@section('content')
    <h1>@lang('Articul')</h1>
    <h2>{{ $articulo->titulo }}</h2>
    <img src="{{ asset($articulo->imagen) }}" alt="Imagen del articulos">
    <p>{{ $articulo->contenido }}</p>
    <a href="{{ route('articulos.index') }}">@lang('Back to Articuls')</a>
    @auth
        <a href="{{ route('articulos.edit', $articulo) }}">@lang('Edit Articul')</a>
    @endauth
    @auth
        <form method="POST" action="{{ route('articulos.delete', $articulo) }}" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit">@lang('Delete Articul')</button>
        </form>
    @endauth
@endsection