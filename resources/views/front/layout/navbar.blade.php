<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('front/img/icons8-system-coding-53.png') }}" alt="" width="50" height="50">
            <strong>Sinau Code</strong>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('/articles') }}">Artikel</a></li>

                <li class="nav-item"><a class="nav-link active" href="{{ url('/about') }}">About</a></li>
                {{-- <li class="nav-item"><a class="nav-link active" href="{{ url('/contact') }}">Contact</a></li>
                --}}
                {{-- <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li> --}}
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/home') }}" class="nav-link active">Home</a>
                @else
                <a href="{{ route('login') }}" class="nav-link active">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-link active">Register</a>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>