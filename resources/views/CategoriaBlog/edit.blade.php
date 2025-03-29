@extends('partials.layout')

@section('tilte', 'Categoria de Blog')

@section('content')
    <h1>@lang('Edit Category')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('categoriaBlog.update', $categoriaBlog) }}">
        @csrf
        @method('PATCH')
        <label for="">@lang('Category Name')</label><br>
        <input name="nombre" type="text" placeholder="Nombre de la categoria" value="{{ old('nombre', $categoriaBlog['nombre']) }}"><br>
        <label for="">@lang('Category Description')</label><br>
        <input name="descripcion" type="text" placeholder="Descripcion de la categoria" value="{{ old('descripcion', $categoriaBlog['descripcion']) }}"><br>
        <button>@lang('Update Category')</button>
    </form>
    <a href="{{ route('categoriaBlog.index') }}">@lang('Back to categories')</a>
@endsection