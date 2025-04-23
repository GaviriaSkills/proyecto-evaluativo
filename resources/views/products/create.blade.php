@extends('partials.layout')

@section('title', 'Productos')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> 
@endif

<div class="row">
    <div class="col-12 col-sm-10 col-ls-6 mx-auto">
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('product.store') }}">
            <h1>@lang('New Product')</h1>
            @csrf
            <div class="form-group mb-3">
                <label for="name">@lang('Product Name')</label>
                <input class="form-control bg-light shadow-sm"
                    id="name" 
                    name="nombre" 
                    type="text" 
                    placeholder="Nombre del producto" 
                    value="{{ old('nombre') }}">
            </div>
            <div class="form-group mb-3">
                <label for="description">@lang('Product Description')</label>
                <input class="form-control bg-light shadow-sm" 
                    id="description" 
                    name="descripcion" 
                    type="text" 
                    placeholder="Descripcion del producto" 
                    value="{{ old('descrpcion') }}">
            </div>
            <div class="form-group mb-3">
                <label for="price">@lang('Product Price')</label>
                <input class="form-control bg-light shadow-sm" 
                    id="price" 
                    name="precio" 
                    type="number" 
                    placeholder="Precio del producto" 
                    value="{{ old('precio') }}">
            </div>
            <div class="form-group mb-3">
                <label for="stock">@lang('Product Stock')</label>
                <input class="form-control bg-light shadow-sm" 
                    id="stock" 
                    name="stock" 
                    type="number" 
                    placeholder="Stock del producto" 
                    value="{{ old('stock') }}">
            </div>
            <div>
                <label for="categoria_id">@lang('Product Category')</label><br>
                <select class="form-select bg-light shadow-sm" name="categoria_id" id="categoria_id">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select><br>
            </div>
            <div class="form-group mb-3">
                <label for="image">@lang('Product Image')</label>
                <input class="form-control bg-light shadow-sm" 
                    id="image" 
                    name="imagen" 
                    type="text" 
                    placeholder="Imagen del producto" 
                    value="{{ old('imagen') }}">
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg text-light">@lang('Create Product')</button>
            </div>
        </form>
    </div>
</div>

@endsection