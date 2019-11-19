<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') &ndash; AIOT</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @hasSection('top-links')
                @yield('top-links')
                |
            @endif
                @auth
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <h1>@yield('title') &ndash; AIOT</h1>
        </div>
        <main>
            @yield('main')
        </main>
    </div>
</div>
</body>
</html>