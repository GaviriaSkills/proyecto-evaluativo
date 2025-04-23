<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="min-vh-100 d-flex flex-column align-items-center justify-content-between">
        <header>
            @include('partials.nav')
            @if (session('status'))
                {{ session('status') }}
            @endif
        </header>
    
        <main class="min-vw-100">@yield('content')</main>
    
        <footer class="bg-white text-center text-black-50 py-3 
        shodow min-vw-100">
            {{ config('app.name') }} | Copyright &copy; {{ date('Y') }}
        </footer>
    </div>
</body>
</html>