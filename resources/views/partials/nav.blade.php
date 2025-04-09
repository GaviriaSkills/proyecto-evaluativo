<ul>
    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li><a class="{{ request()->routeIs('product.*') ? 'active' : '' }}" href="{{ route('product.index') }}">@lang('Products')</a></li>
    <li><a class="{{ request()->routeIs('categorias.*') ? 'active' : '' }}" href="{{ route('categorias.index') }}">@lang('Categories')</a></li>
    <li><a class="{{ request()->routeIs('articulos.*') ? 'active' : '' }}" href="{{ route('articulos.index') }}">@lang('Articuls')</a></li>
    @guest
        <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
    @else
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endguest
</ul>