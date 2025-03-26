@extends ('partials.layout')

@section ('title', 'Productos')

@section ('content')
    <h1>@lang('Edit Product')</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('product.update', $producto) }}">
        @csrf
        @method('PATCH')
        <label for="">@lang('Product Name')</label><br>
        <input name="nombre" type="text" placeholder="Nombre del producto" value="{{ old('nombre', $producto['nombre']) }}"><br>
        <label for="">@lang('Product Description')</label><br>
        <input name="descripcion" type="text" placeholder="Descripcion del producto" value="{{ old('descripcion', $producto['descripcion']) }}"><br>
        <label for="">@lang('Product Price')</label><br>
        <input name="precio" type="number" placeholder="Precio del producto" value="{{ old('precio', $producto['precio']) }}"><br>
        <label for="">@lang('Product Stock')</label><br>
        <input name="stock" type="number" placeholder="Stock del producto" value="{{ old('stock', $producto['stock']) }}"><br>
        <label for="">@lang('Product Category')</label><br>
        <select name="categoria_id" id="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ old('categoria_id', $producto['categoria_id']) == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select><br>
        <label for="">@lang('Product Image')</label><br>
        <input name="imagen" type="text" placeholder="Imagen del producto" value="{{ old('imagen', $producto['imagen']) }}"><br>
        <button>@lang('Update Product')</button>
    </form>
    <a href="{{ route('product.index') }}">@lang('Back to products')</a>
@endsection