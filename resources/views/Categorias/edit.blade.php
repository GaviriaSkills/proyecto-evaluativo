@extends ('partials.layout')

@section ('title', 'Categoria')

@section ('content')
    <h1>@lang('Edit Category')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('categorias.update', $categoria) }}">
        @csrf
        @method('PATCH')
        <label for="">@lang('Category Name')</label><br>
        <input name="nombre" type="text" placeholder="Nombre de la categoria" value="{{ old('nombre', $categoria['nombre']) }}"><br>
        <label for="">@lang('Category Description')</label><br>
        <input name="descripcion" type="text" placeholder="Descripcion de la categoria" value="{{ old('descripcion', $categoria['descripcion']) }}"><br>
        <button>@lang('Update Category')</button>
    </form>
@endsection