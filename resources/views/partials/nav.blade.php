<ul>
    <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">@lang('Home')</a></li>
    <li><a class="{{ request()->routeIs('product.*') ? 'active' : '' }}" href="{{ route('product.index') }}">@lang('Products')</a></li>
    <li><a class="{{ request()->routeIs('categorias.*') ? 'active' : '' }}" href="{{ route('categorias.index') }}">@lang('Categories')</a></li>
    <li><a class="{{ request()->routeIs('articulos.*') ? 'active' : '' }}" href="{{ route('articulos.index') }}">@lang('Articuls')</a></li>
</ul>