<nav class="navbar navbar-light navbar-expand-md  bg-light shadow-sm min-vw-100">

    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('product.*') ? 'active' : '' }}" href="{{ route('product.index') }}">@lang('Products')</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('categorias.*') ? 'active' : '' }}" href="{{ route('categorias.index') }}">@lang('Categories')</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->routeIs('articulos.*') ? 'active' : '' }}" href="{{ route('articulos.index') }}">@lang('Articuls')</a></li>
            @guest
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Iniciar Sesión</a></li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                </li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </ul>
    </div>
</nav>
