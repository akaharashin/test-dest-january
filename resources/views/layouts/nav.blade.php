<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid mx-5">
        <a href="/" class="navbar-brand">Destination</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">Admin</a>
                </li>
                <@auth
                    <li class="nav-item">
                        {{-- <a class="btn border text-white" href="{{ route('logout') }}">Logout</a> --}}
                    </li>
                @endauth
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    @guest
                        <a class="btn border text-white" href="{{ route('login') }}">Login</a>
                    @endguest
                </li>
                @auth
                    <li class="nav-item">
                        <a class="btn border text-white" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>