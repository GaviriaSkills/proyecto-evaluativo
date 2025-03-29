@extends('partials.layout')

@section('title', 'Categoria de Blog')

@section('content')
    <h1>@lang('New Category')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('categoriaBlog.store') }}">
        @csrf
        <label for="">@lang('Category Name')</label><br>
        <input name="nombre" type="text" placeholder="Nombre de la categoria" value="{{ old('nombre') }}"><br>
        <label for="">@lang('Category Description')</label><br>
        <input name="descripcion" type="text" placeholder="Descripcion de la categoria" value="{{ old('descripcion') }}"><br>
        <button>@lang('Create Category')</button>
    </form>
    <a href="{{ route('categorias.index') }}">@lang('Back to categories')</a>
@endsection