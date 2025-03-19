@extends('partials.layout')

@section('title', 'Productos')

@section('content')
    <h1>@lang('Products' | {{ $product->name }})</h1>
    
    <h2>{{ $product->name }}</h2>
    <img src="{{ $product->image }}" alt="{{ $product->name }}">
    <h4>{{ $product->descripcion }}</h4>
    <p>{{ $product->price }}</p>
    <p>{{ $product->stock }}</p>
    <p>{{ $product->created_at->diffForHumans() }}</p>
@endsection