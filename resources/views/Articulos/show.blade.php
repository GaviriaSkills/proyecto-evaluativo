@extends('partials.layout')
@section('title', 'Articulos')

@section('content')
    <h1>@lang('Articul')</h1>
    <h2>{{ $articulo->titulo }}</h2>
    <img src="{{ asset($articulo->imagen) }}" alt="Imagen del articulos">
    <p>{{ $articulo->contenido }}</p>
    <a href="{{ route('articulos.index') }}">@lang('Back to Articuls')</a>
    <a href="{{ route('articulos.edit', $articulo->id) }}">@lang('Edit Articul')</a>
    {{-- <form method="POST" action="{{ route('articulos.destroy', $articulo) }}" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">@lang('Delete Articul')</button>
    </form> --}}
@endsection