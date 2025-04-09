@extends('partials.layout')

@section('title', 'Productos')

@section('content')
    <h1>@lang('Products') | {{ $producto->nombre }}</h1>
    
    <h2>{{ $producto->nombre }}</h2>
    <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
    <h4>{{ $producto->descripcion }}</h4>
    <p>Precio: {{ $producto->precio }}</p>
    <p>Stock: {{ $producto->stock }}</p>
    <p>Publicado: {{ $producto->created_at->diffForHumans() }}</p>
    @auth  
        <a href="{{ route('product.edit', $producto) }}">@lang('Edit Product')</a>
    @endauth
    @auth
        <form method="POST" action="{{ route('product.delete', $producto) }}">
            @csrf
            @method('DELETE')
            <button>@lang('Delete Product')</button>
        </form>
    @endauth
    <a href="{{ route('product.index') }}">@lang('Back to products')</a>
@endsection