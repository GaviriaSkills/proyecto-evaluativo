@extends('partials.layout')

@section('title', 'Categoria')

@section('content')
    <h1>@lang('Categories')</h1>
    @auth 
        <a href="{{ route('categorias.create') }}">@lang('New Category')</a>
    @endauth
    <ul>
        @forelse ($categorias as $categoria)
            <li>
                <a href="{{ route('categorias.show', $categoria) }}">
                    {{ $categoria->nombre }}
                    <small>
                        <em>{{ $categoria->created_at }}</em>
                    </small>
                </a>
            </li>
        @empty
            <li>@lang('No categories found')</li>
        @endforelse
@endsection