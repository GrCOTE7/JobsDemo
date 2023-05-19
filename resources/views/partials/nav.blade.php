<nav class="navbar navbar-expand-sm navbar-dark bg-primary">

    <div class="container-fluid">
        <a class="navbar-brand" href="/">Image</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @php
            $route = request()->route()->getName();
        @endphp

        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'property')]) aria-current="page" href="{{ route('property.index') }}">Biens</a>
                </li>
            </ul> --}}
            <div class="navbar-nav">
                <div class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'test')]) aria-current="page" href="{{ route('image.test') }}">Test</a>
                </div>
            </div>
            <div class="ms-auto">
                @auth
                <div class="navbar-nav">
                    <div class="nav-item">
                        <a href="/t" class="nav-link">Test</a>
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
