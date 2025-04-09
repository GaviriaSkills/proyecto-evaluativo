@extends('partials.layout')

@section('title', 'Categoria de Blog')

@section('content')
    <h1>@lang('Category')</h1>
    <h2>{{ $categoriaBlog->nombre }}</h2>
    <p>{{ $categoriaBlog->descripcion }}</p>
    @auth
        <a href="{{ route('categoriaBlog.edit', $categoriaBlog) }}">@lang('Edit Category')</a>
    @endauth
    @auth
        <form method="POST" action="{{ route('categoriaBlog.delete', $categoriaBlog) }}">
            @csrf
            @method('DELETE')
            <button>@lang('Delete Category')</button>
        </form>
    @endauth
    <a href="{{ route('categoriaBlog.index') }}">@lang('Back to categories')</a>
@endsection