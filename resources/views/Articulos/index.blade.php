@extends ('partials.layout')
@section('title', 'Articulos')

@section('content')
    <h1>@lang('Articulos')</h1>
    <a href="{{ route('categoriaBlog.index') }}">@lang('Categories de Blog')</a><br>
    @auth
        <a href="{{ route('articulos.create') }}">@lang('New Articul')</a>
    @endauth
    <ul>
        @forelse ($articulos as $articulo)
            <li>
                <a href="{{ route('articulos.show', $articulo) }}">
                    {{ $articulo->titulo }}<br>
                    <small>
                        <em>{{ $articulo->created_at }}</em>
                    </small>
                </a>
            </li>
        @empty
            <li>@lang('No articuls found')</li>
        @endforelse
    </ul>
    <div class="pagination">
        {{ $articulos->links('pagination::bootstrap-5') }}
    </div>
@endsection