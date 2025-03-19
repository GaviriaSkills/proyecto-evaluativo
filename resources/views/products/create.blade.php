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
        <input name="name" type="text" placeholder="Nombre del producto" value="{{ old('name') }}"><br>
        <label for="">@lang('Product Description')</label><br>
        <input name="description" type="text" placeholder="Descripcion del producto" value="{{ old('description') }}"><br>
        <label for="">@lang('Product Price')</label><br>
        <input name="price" type="number" placeholder="Precio del producto" value="{{ old('price') }}"><br>
        <label for="">@lang('Product Stock')</label><br>
        <input name="stock" type="number" placeholder="Stock del producto" value="{{ old('stock') }}"><br>
        <label for="">@lang('Product Image')</label><br>
        <input name="image" type="text" placeholder="Imagen del producto" value="{{ old('image') }}"><br>
        <button>@lang('Create Product')</button>
    </form>
@endsection