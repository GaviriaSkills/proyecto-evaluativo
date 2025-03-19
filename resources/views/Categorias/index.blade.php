@extends('partials.layout')

@section('title', 'Categoria')

@section('content')
    <h1>@lang('Categories')</h1>
    <a href="{{ route('categoria.create') }}">@lang('New Category')</a>
    <ul>
        @forelse ($categorias as $categoria)
            <li>
                <a href="{{ route('categoria.show', $categoria) }}">{{ $categoria->nombre }}</a>
            </li>
        @empty
            <li>@lang('No categories found')</li>
        @endforelse
@endsection