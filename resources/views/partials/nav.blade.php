@php
    $uri = request()->getPathInfo();
    $route = request()
        ->route()
        ->getName();
@endphp

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">

    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'image')]) aria-current="page" href="{{ route('image.create') }}">Image</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'books')]) aria-current="page" href="{{ route('books.index') }}">Books</a>
                </li>
            </ul>

            <div class="navbar-nav">
                <div class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'test')]) aria-current="page" href="{{ route('test.index') }}">Test</a>
                </div>
            </div>
            <div class="ms-auto">
                @auth
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a href="/dashboard" class="nav-link">Dashboard</a>
                        </div>
                    </div>
                @endauth

                @guest
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Se connecter</a>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>

    </div>
</nav>

<div class="right" id='bloc'>
    <b>{{ $uri }}</b> (<i>{{ $route }}</i>)
</div>
