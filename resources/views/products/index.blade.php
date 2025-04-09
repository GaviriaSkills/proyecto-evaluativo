@extends('partials.layout')

@section('title', 'Productos')

@section('content')
    <h1>@lang('Products')</h1>
    <form method="GET" action="{{ route('product.index') }}">
        <label for="categoria">Filtrar por categoria</label>
        <select name="categoria" id="categoria" onchange="this.form.submit()">
            <option value="">@lang('All')</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ request('categoria') == $categoria->id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </form>
    @auth
        <a href="{{ route('product.create') }}">@lang('New Product')</a>
    @endauth
    <ul>
        @forelse ($products as $product)
            <li>
                <a href="{{ route('product.show', $product) }}">
                    {{ $product->nombre }}
                    <small>
                        <em>{{ $product->created_at }}</em>
                    </small>
                </a>
            </li>
            @empty
                <li>@lang('No products')</li>
        @endforelse
@endsection