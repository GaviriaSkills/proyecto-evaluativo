@extends ('partials.layout')

@section ('title', 'Categoria')

@section ('content')
    <h1>@lang('Category')</h1>
    <h2>{{ $categoria->nombre }}</h2>
    <p>{{ $categoria->descripcion }}</p>
    @auth
        <a href="{{ route('categorias.edit', $categoria) }}">@lang('Edit Category')</a>
    @endauth
    @auth
        <form method="POST" action="{{ route('categorias.delete', $categoria) }}">
            @csrf
            @method('DELETE')
            <button>@lang('Delete Category')</button>
        </form>
    @endauth
    <a href="{{ route('categorias.index') }}">@lang('Back to categories')</a>
@endsection