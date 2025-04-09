@extends('partials.layout')

@section('title', 'Categorias de Blog')

@section('content')
    <h1>@lang('Categories de Blog')</h1>
    @auth
        <a href="{{ route('categoriaBlog.create') }}">@lang('New Category')</a>
    @endauth
    <ul>
        @forelse ($categorias as $categoria)
            <li>
                <a href="{{ route('categoriaBlog.show', $categoria) }}">
                    {{ $categoria->nombre }}
                    <small>
                        <em>{{ $categoria->created_at }}</em>
                    </small>
                </a>
            </li>
        @empty
            <li>@lang('No categories found')</li>
        @endforelse
    </ul>
    {{-- <div class="pagination">
        {{ $categorias->links() }}
    </div> --}}
@endsection