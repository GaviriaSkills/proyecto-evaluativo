@extends('partials.layout')

@section('title', 'Productos')

@section('content')
    <h1>@lang('New Product')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> 
    @endif

    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <label for="">@lang('Product Name')</label><br>
        <input name="nombre" type="text" placeholder="Nombre del producto" value="{{ old('nombre') }}"><br>
        <label for="">@lang('Product Description')</label><br>
        <input name="descripcion" type="text" placeholder="Descripcion del producto" value="{{ old('descrpcion') }}"><br>
        <label for="">@lang('Product Price')</label><br>
        <input name="precio" type="number" placeholder="Precio del producto" value="{{ old('precio') }}"><br>
        <label for="">@lang('Product Stock')</label><br>
        <input name="stock" type="number" placeholder="Stock del producto" value="{{ old('stock') }}"><br>
        <label for="">@lang('Product Category')</label><br>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select><br>
        <label for="">@lang('Product Image')</label><br>
        <input name="imagen" type="text" placeholder="Imagen del producto" value="{{ old('imagen') }}"><br>
        <button>@lang('Create Product')</button>
    </form>
@endsection