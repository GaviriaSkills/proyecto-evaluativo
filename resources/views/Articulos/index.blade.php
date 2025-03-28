@extends ('partials.layout')
@section('title', 'Articulos')

@section('content')
    <h1>@lang('Articulos')</h1>
    <a href="{{ route('articulos.create') }}">@lang('New Articulo')</a>
    <ul>
        @forelse ($articulos as $articulo)
            <li>
                <a href="{{ route('articulos.show', $articulo) }}">
                    {{ $articulo->nombre }}
                    <small>
                        <em>{{ $articulo->created_at }}</em>
                    </small>
                </a>
            </li>
        @empty
            <li>@lang('No articuls found')</li>
        @endforelse
    </ul>
    {{-- <div class="pagination">
        {{ $articulos->links() }}
    </div> --}}
@endsection