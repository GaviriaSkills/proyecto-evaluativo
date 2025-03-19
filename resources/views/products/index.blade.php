@extends('partials.layout')

@section('titlte', 'Productos')

@section('content')
    <h1>@lang('Products')</h1>
    <a href="{{ route('product.create') }}">@lang('New Product')</a>
    <ul>
        @forelse ($products as $product)
            <li>
                <a href="{{ route('product.show', $product) }}">
                    {{ $product->name }}
                    <small>
                        <em>{{ $product->created_at }}</em>
                    </small>
                </a>
            </li>
            @empty
                <li>@lang('No products')</li>
        @endforelse
@endsection